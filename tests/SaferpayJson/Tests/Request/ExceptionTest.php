<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request;

use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Psr7\Utils as GuzzleUtils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\SerializerFactory;

class ExceptionTest extends TestCase
{
    public function testSaferpayErrorExceptionReturnsErrorResponse(): void
    {
        /** @var ErrorResponse $errorResponse */
        $errorResponse = SerializerFactory::get()->deserialize(
            '{"Behavior":"DO_NOT_RETRY","ErrorName":"VALIDATION_FAILED","ErrorMessage":"Invalid request"}',
            ErrorResponse::class,
            'json',
        );

        $exception = new SaferpayErrorException($errorResponse);

        $this->assertSame($errorResponse, $exception->getErrorResponse());
        $this->assertInstanceOf(SaferpayException::class, $exception);
    }

    public function testHttpRequestExceptionChainsPreviousException(): void
    {
        $previous = new \RuntimeException('connection failed');

        $exception = new HttpRequestException($previous->getMessage(), 0, $previous);

        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(SaferpayException::class, $exception);
    }

    public function testRequestRejectsInvalidJsonSuccessResponse(): void
    {
        $client = $this->createMock(ClientInterface::class);
        $response = $this->createMock(GuzzleResponse::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn(GuzzleUtils::streamFor('not-json'));

        $client->method('sendRequest')->willReturn($response);

        $requestConfig = new RequestConfig('apiKey', 'apiSecret', 'customerId');
        $requestConfig->setClient($client);

        $request = new CancelRequest(
            $requestConfig,
            new TransactionReference(),
        );

        $this->expectException(HttpRequestException::class);
        $this->expectExceptionMessage('Unexpected invalid JSON response body.');

        $request->execute();
    }

    public function testRequestRejectsInvalidJsonErrorResponse(): void
    {
        $client = $this->createMock(ClientInterface::class);
        $response = $this->createMock(GuzzleResponse::class);
        $response->method('getStatusCode')->willReturn(400);
        $response->method('getBody')->willReturn(GuzzleUtils::streamFor('not-json'));

        $client->method('sendRequest')->willReturn($response);

        $requestConfig = new RequestConfig('apiKey', 'apiSecret', 'customerId');
        $requestConfig->setClient($client);

        $request = new CancelRequest(
            $requestConfig,
            new TransactionReference(),
        );

        $this->expectException(HttpRequestException::class);
        $this->expectExceptionMessage('Unexpected invalid JSON error response body.');

        $request->execute();
    }

    public function testRequestWrapsTransportErrorsInHttpRequestException(): void
    {
        $previous = new class('connection failed') extends \RuntimeException implements ClientExceptionInterface {
        };

        $client = $this->createMock(ClientInterface::class);
        $client->method('sendRequest')->willThrowException($previous);

        $requestConfig = new RequestConfig('apiKey', 'apiSecret', 'customerId');
        $requestConfig->setClient($client);

        $request = new CancelRequest(
            $requestConfig,
            new TransactionReference(),
        );

        try {
            $request->execute();
            $this->fail('Expected HttpRequestException');
        } catch (HttpRequestException $e) {
            $this->assertSame($previous, $e->getPrevious());
            $this->assertInstanceOf(SaferpayException::class, $e);
        }
    }
}
