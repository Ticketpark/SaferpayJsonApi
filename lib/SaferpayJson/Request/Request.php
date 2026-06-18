<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use GuzzleHttp\Psr7\Request as PsrRequest;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Ticketpark\SaferpayJson\Request\Container\RequestHeader;
use Ticketpark\SaferpayJson\Request\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\Response;

abstract class Request
{
    private const ERROR_RESPONSE_CLASS = ErrorResponse::class;

    #[Exclude]
    private RequestConfig $requestConfig;

    abstract public function execute(): Response;

    abstract public function getApiPath(): string;

    /**
     * @phpstan-return  class-string
     */
    abstract public function getResponseClass(): string;

    public function __construct(RequestConfig $requestConfig)
    {
        $this->requestConfig = $requestConfig;
    }

    #[SerializedName('RequestHeader')]
    #[VirtualProperty]
    public function getRequestHeader(): RequestHeader
    {
        return new RequestHeader(
            $this->requestConfig->getCustomerId(),
            $this->requestConfig->getRequestId(),
            $this->requestConfig->getRetryIndicator(),
        );
    }

    public function getRequestConfig(): RequestConfig
    {
        return $this->requestConfig;
    }

    protected function doExecute(): Response
    {
        $request = new PsrRequest(
            'POST',
            $this->getUrl(),
            $this->getHeaders(),
            $this->getContent(),
        );

        try {
            $response = $this->requestConfig->getClient()->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new HttpRequestException($e->getMessage(), 0, $e);
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {
            /** @var ErrorResponse $errorResponse */
            $errorResponse = $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
                'json',
            );

            throw new SaferpayErrorException($errorResponse);
        }

        if (200 !== $statusCode) {
            throw new HttpRequestException(sprintf('Unexpected http request response with status code %s.', $response->getStatusCode()));
        }

        /** @var Response $libraryResponse */
        $libraryResponse = $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            $this->getResponseClass(),
            'json',
        );

        return $libraryResponse;
    }

    private function getUrl(): string
    {
        return $this->requestConfig->getRootUrl().$this->getApiPath();
    }

    /** @return array<string, string> */
    private function getHeaders(): array
    {
        return [
            'Content-Type' => 'application/json; charset=utf-8',
            'Accept' => 'application/json',
            'Authorization' => 'Basic '.base64_encode(
                $this->requestConfig->getApiKey()
                .':'
                .$this->requestConfig->getApiSecret(),
            ),
        ];
    }

    private function getContent(): string
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    private function getSerializer(): SerializerInterface
    {
        return $this->requestConfig->getSerializer();
    }
}
