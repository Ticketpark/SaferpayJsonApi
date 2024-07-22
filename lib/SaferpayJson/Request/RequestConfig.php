<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use GuzzleHttp\Client;

final class RequestConfig
{
    private string $apiKey;
    private string $apiSecret;
    private string $customerId;
    private bool $test;
    private ?Client $client = null;
    private ?string $requestId;
    private int $retryIndicator;

    public function __construct(
        string  $apiKey,
        string  $apiSecret,
        string  $customerId,
        bool    $test = false,
        ?string $requestId = null,
        int     $retryIndicator = 0)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->customerId = $customerId;
        $this->test = $test;
        $this->requestId = $requestId;
        $this->retryIndicator = $retryIndicator;
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

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): Client
    {
        if (null === $this->client) {
            return new Client();
        }

        return $this->client;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function getRetryIndicator(): int
    {
        return $this->retryIndicator;
    }
}
