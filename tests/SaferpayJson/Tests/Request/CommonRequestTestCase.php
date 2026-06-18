<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request;

use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Psr7\Utils as GuzzleUtils;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\StreamInterface;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayException;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\Response;
use Ticketpark\SaferpayJson\SerializerFactory;

abstract class CommonRequestTestCase extends TestCase
{
    private ?bool $successful = null;

    /** @var class-string<Response>|null */
    private ?string $successfulResponseClass = null;

    abstract protected function getInstance(): Request;

    public function testErrorResponse(): void
    {
        $this->successful = false;

        try {
            $this->executeRequest();
            $this->fail('Expected SaferpayErrorException');
        } catch (SaferpayErrorException $e) {
            $this->assertInstanceOf(ErrorResponse::class, $e->getErrorResponse());
            $this->assertInstanceOf(SaferpayException::class, $e);
        }
    }

    /**
     * @return array<string, array{0: ?string, 1: int, 2?: class-string<\Throwable>}>
     */
    public static function getRequestConfigValidationParams(): array
    {
        return [
            'first try' => [null, RequestConfig::MIN_RETRY_INDICATOR],
            'second try' => [uniqid(), RequestConfig::MIN_RETRY_INDICATOR + 1],
            'last try' => [uniqid(), RequestConfig::MAX_RETRY_INDICATOR],
            'try after all retries exceeded' => [uniqid(), RequestConfig::MAX_RETRY_INDICATOR + 1, \InvalidArgumentException::class],
        ];
    }

    /**
     * @param class-string<\Throwable>|null $expectedException
     */
    #[DataProvider('getRequestConfigValidationParams')]
    public function testRequestConfigValidation(
        ?string $requestId,
        int $retryIndicator,
        ?string $expectedException = null,
    ): void {
        $config = new RequestConfig(
            'apiKey',
            'apiSecret',
            'customerId',
            false,
        );

        if (null !== $expectedException) {
            $this->expectException($expectedException);
        }

        $result = $config
            ->setRequestId($requestId)
            ->setRetryIndicator($retryIndicator);

        $this->assertInstanceOf(RequestConfig::class, $result);
    }

    /**
     * @param class-string<Response> $responseClass
     */
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
            'customerId',
        );

        $requestConfig->setClient($this->getClientMock());

        return $requestConfig;
    }

    private function executeRequest(): Response
    {
        $initializer = $this->getInstance();

        return $initializer->execute();
    }

    private function getClientMock(): MockObject&ClientInterface
    {
        $browser = $this->createMock(ClientInterface::class);

        $browser->expects($this->once())
            ->method('sendRequest')
            ->willReturn($this->getResponseMock());

        return $browser;
    }

    private function getResponseMock(): MockObject&GuzzleResponse
    {
        $response = $this->createMock(GuzzleResponse::class);

        $response->method('getStatusCode')
            ->willReturn($this->successful ? 200 : 404);

        $content = $this->successful
            ? $this->getFakedApiResponse($this->getSuccessfulResponseClass())
            : $this->getFakedApiResponse(ErrorResponse::class);

        $response->method('getBody')
            ->willReturn($this->getBodyContent($content));

        return $response;
    }

    /**
     * @return class-string<Response>
     */
    private function getSuccessfulResponseClass(): string
    {
        if (null === $this->successfulResponseClass) {
            throw new \LogicException('Successful response class not configured.');
        }

        return $this->successfulResponseClass;
    }

    /**
     * @param class-string<Response> $class
     */
    private function getFakedApiResponse(string $class): string
    {
        $response = new $class();

        return SerializerFactory::get()->serialize($response, 'json');
    }

    private function getBodyContent(string $content): StreamInterface
    {
        return GuzzleUtils::streamFor($content);
    }
}
