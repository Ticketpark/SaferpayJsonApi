<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use GuzzleHttp\Client;
use InvalidArgumentException;

final class RequestConfig
{
    public const MIN_RETRY_INDICATOR = 0;
    public const MAX_RETRY_INDICATOR = 9;
    private const ROOT_URL = 'https://www.saferpay.com/api';
    private const ROOT_URL_TEST = 'https://test.saferpay.com/api';

    private string $apiKey;
    private string $apiSecret;
    private string $customerId;
    private string $rootUrl;
    private bool $test;

    private ?Client $client = null;
    private ?string $requestId = null;
    private int $retryIndicator = self::MIN_RETRY_INDICATOR;

    public function __construct(
        string $apiKey,
        string $apiSecret,
        string $customerId,
        bool   $test = false,
        string $rootUrl = null
    ) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->customerId = $customerId;
        $this->test = $test;

        if (null === $rootUrl) {
            $this->rootUrl = ($test ? self::ROOT_URL_TEST : self::ROOT_URL);
        } else {
            $this->rootUrl = $rootUrl;
        }
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
            throw new InvalidArgumentException(sprintf(
                'Retry indicator range: inclusive between %s and %s.',
                self::MIN_RETRY_INDICATOR,
                self::MAX_RETRY_INDICATOR
            ));
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

    public function setRootUrl(string $rootUrl): void
    {
        $this->rootUrl = $rootUrl;
    }
}
