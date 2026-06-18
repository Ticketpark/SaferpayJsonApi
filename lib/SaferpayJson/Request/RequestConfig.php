<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use GuzzleHttp\Client;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;
use Ticketpark\SaferpayJson\SerializerFactory;

final class RequestConfig
{
    public const int MIN_RETRY_INDICATOR = 0;
    public const int MAX_RETRY_INDICATOR = 9;
    private const string ROOT_URL = 'https://www.saferpay.com/api';
    private const string ROOT_URL_TEST = 'https://test.saferpay.com/api';

    private string $rootUrl;

    private ?ClientInterface $client = null;
    private ?SerializerInterface $serializer = null;
    private ?string $requestId = null;
    private int $retryIndicator = self::MIN_RETRY_INDICATOR;

    public function __construct(
        private string $apiKey,
        private string $apiSecret,
        private string $customerId,
        private bool $test = false,
        ?string $rootUrl = null,
    ) {
        $this->rootUrl = $rootUrl ?? ($test ? self::ROOT_URL_TEST : self::ROOT_URL);
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function isTest(): bool
    {
        return $this->test;
    }

    public function setClient(ClientInterface $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): ClientInterface
    {
        if (null === $this->client) {
            return new Client();
        }

        return $this->client;
    }

    public function setSerializer(SerializerInterface $serializer): self
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function getSerializer(): SerializerInterface
    {
        if (null === $this->serializer) {
            return SerializerFactory::get();
        }

        return $this->serializer;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRetryIndicator(int $retryIndicator): self
    {
        if ($retryIndicator < self::MIN_RETRY_INDICATOR || $retryIndicator > self::MAX_RETRY_INDICATOR) {
            throw new \InvalidArgumentException(sprintf('Retry indicator range: inclusive between %s and %s.', self::MIN_RETRY_INDICATOR, self::MAX_RETRY_INDICATOR));
        }

        $this->retryIndicator = $retryIndicator;

        return $this;
    }

    public function getRetryIndicator(): int
    {
        return $this->retryIndicator;
    }

    public function getRootUrl(): string
    {
        return $this->rootUrl;
    }

    public function setRootUrl(string $rootUrl): self
    {
        $this->rootUrl = $rootUrl;

        return $this;
    }
}
