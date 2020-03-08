<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\ResponseInterface;

abstract class CommonRequestTest extends TestCase
{
    /** @var bool */
    private $successful;

    /** @var ?string */
    private $successfulResponseClass;

    public function doTestErrorResponse(string $requestClass): void
    {
        $this->successful = false;
        $this->successfulResponseClass = null;
        $response = $this->executeRequest($requestClass);

        $this->assertInstanceOf(ErrorResponse::class, $response);
    }

    public function doTestSuccessfulResponse(string $requestClass, string $responseClass): void
    {
        $this->successful = true;
        $this->successfulResponseClass = $responseClass;
        $response = $this->executeRequest($requestClass);

        $this->assertInstanceOf($responseClass, $response);
    }

    private function executeRequest(string $requestClass): ResponseInterface
    {
        $initializer = new $requestClass('key', 'secret');
        $initializer->setClient($this->getClientMock());

        return $initializer->execute();
    }

    private function getClientMock(): MockObject
    {
        $browser = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->addMethods(['post'])
            ->getMock();

        $browser->expects($this->once())
            ->method('post')
            ->will($this->returnValue($this->getResponseMock()));

        return $browser;
    }

    private function getResponseMock(): MockObject
    {
        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->onlyMethods([
                'getStatusCode',
                'getBody'
            ])
            ->getMock();

        $response->expects($this->any())
            ->method('getStatusCode')
            ->will($this->returnValue($this->successful ? 200: 404));

        if ($this->successful) {
            $content = $this->getFakedApiResponse($this->successfulResponseClass);
        } else {
            $content = $this->getFakedApiResponse(ErrorResponse::class);
        }

        $response->expects($this->any())
            ->method('getBody')
            ->will($this->returnValue($content));

        return $response;
    }

    private function getFakedApiResponse(string $class): string
    {
        AnnotationRegistry::registerLoader('class_exists');
        $serializer = SerializerBuilder::create()->build();

        $response = new $class();

        return $serializer->serialize($response, 'json');
    }
}
