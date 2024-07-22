<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use GuzzleHttp\Client;
use InvalidArgumentException;

final class RequestConfig
{
    public const MIN_RETRY_INDICATOR = 0;
    public const MAX_RETRY_INDICATOR = 9;

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

        if ($retryIndicator < self::MIN_RETRY_INDICATOR || $retryIndicator > self::MAX_RETRY_INDICATOR) {
            throw new InvalidArgumentException('Retry indicator range: inclusive between '
                . self::MIN_RETRY_INDICATOR . '  and ' . self::MAX_RETRY_INDICATOR);
        }

        if ($retryIndicator > self::MIN_RETRY_INDICATOR && $requestId === null) {
            throw new InvalidArgumentException('Request id must be set if retry indicator is greater than 0');
        }

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
