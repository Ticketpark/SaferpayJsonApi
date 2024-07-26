<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Psr7\Utils as GuzzleUtils;
use InvalidArgumentException;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\Response;

abstract class CommonRequestTest extends TestCase
{
    private ?bool $successful = null;

    private ?string $successfulResponseClass = null;

    abstract protected function getInstance();

    public function testErrorResponse(): void
    {
        $this->expectException(SaferpayErrorException::class);

        $this->successful = false;
        $this->executeRequest();
    }

    public function getRequestConfigValidationParams(): array
    {
        return [
            'first try' => [null, RequestConfig::MIN_RETRY_INDICATOR],
            'second try' => [uniqid(), RequestConfig::MIN_RETRY_INDICATOR + 1],
            'last try' => [uniqid(), RequestConfig::MAX_RETRY_INDICATOR],
            'try after all retries exceeded' => [uniqid(), RequestConfig::MAX_RETRY_INDICATOR + 1, InvalidArgumentException::class],
        ];
    }

    /**
     * @dataProvider getRequestConfigValidationParams
     */
    public function testRequestConfigValidation(
        ?string $requestId,
        int     $retryIndicator,
        ?string $expectedException = null): void
    {
        $config = new RequestConfig(
            'apiKey',
            'apiSecret',
            'customerId',
            false
        );

        if ($expectedException !== null) {
            $this->expectException($expectedException, $requestId, $retryIndicator);
        }

        $config
            ->setRequestId($requestId)
            ->setRetryIndicator($retryIndicator);
    }

    public function doTestSuccessfulResponse(string $responseClass): void
    {
        $this->successful = true;
        $this->successfulResponseClass = $responseClass;
        $response = $this->executeRequest();

        $this->assertInstanceOf($responseClass, $response);
    }

    protected function getRequestConfig(): RequestConfig
    {
        $requestConfig = new RequestConfig(
            'apiKey',
            'apiSecret',
            'customerId'
        );

        $requestConfig->setClient($this->getClientMock());

        return $requestConfig;
    }

    private function executeRequest(): Response
    {
        $initializer = $this->getInstance();

        return $initializer->execute();
    }

    private function getClientMock(): MockObject
    {
        $mockMethod = $this->getMockMethodBasedOnGuzzleVersion();

        $browser = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->$mockMethod(['post'])
            ->getMock();

        $browser->expects($this->once())
            ->method('post')
            ->will($this->returnValue($this->getResponseMock()));

        return $browser;
    }

    private function getResponseMock(): MockObject
    {
        $response = $this->getMockBuilder(GuzzleResponse::class)
            ->disableOriginalConstructor()
            ->onlyMethods([
                'getStatusCode',
                'getBody'
            ])
            ->getMock();

        $response->expects($this->any())
            ->method('getStatusCode')
            ->will($this->returnValue($this->successful ? 200 : 404));

        if ($this->successful) {
            $content = $this->getFakedApiResponse($this->successfulResponseClass);
        } else {
            $content = $this->getFakedApiResponse(ErrorResponse::class);
        }

        $response->expects($this->any())
            ->method('getBody')
            ->willReturn($this->getBodyContent($content));

        return $response;
    }

    private function getFakedApiResponse(string $class): string
    {
        // Support for doctrine/annotations 1.x
        if (method_exists(AnnotationRegistry::class, 'registerLoader')) {
            AnnotationRegistry::registerLoader('class_exists');
        }

        $serializer = SerializerBuilder::create()->build();

        $response = new $class();

        return $serializer->serialize($response, 'json');
    }

    private function getMockMethodBasedOnGuzzleVersion()
    {
        $reflection = new \ReflectionClass(Client::class);

        return count($reflection->getTraits()) ? 'onlyMethods' : 'addMethods';
    }

    private function getBodyContent(string $content)
    {
        if (class_exists(GuzzleUtils::class)) {
            return GuzzleUtils::streamFor($content);
        }

        return $content;
    }
}
