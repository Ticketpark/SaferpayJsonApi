<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use InvalidArgumentException;
use JMS\Serializer\Annotation\SerializedName;

final class RequestHeader
{
    private const MIN_RETRY_INDICATOR = 0;
    private const MAX_RETRY_INDICATOR = 9;

    /**
     * @SerializedName("SpecVersion")
     */
    private string $specVersion = '1.31';

    /**
     * @SerializedName("CustomerId")
     */
    private string $customerId;

    /**
     * @SerializedName("RequestId")
     */
    private ?string $requestId = null;

    /**
     * @SerializedName("RetryIndicator")
     */
    private int $retryIndicator = 0;

    /**
     * @SerializedName("ClientInfo")
     */
    private ?ClientInfo $clientInfo = null;

    public function __construct(string $customerId, string $requestId = null, int $retryIndicator = self::MIN_RETRY_INDICATOR)
    {
        $this->customerId = $customerId;

        if ($retryIndicator < self::MIN_RETRY_INDICATOR || $retryIndicator > self::MAX_RETRY_INDICATOR) {
            throw new InvalidArgumentException('Retry indicator range: inclusive between '
                . self::MIN_RETRY_INDICATOR . '  and ' . self::MAX_RETRY_INDICATOR);
        }

        if ($retryIndicator > self::MIN_RETRY_INDICATOR && $requestId === null) {
            throw new InvalidArgumentException('Request id must be set if retry indicator is greater than 0');
        }

        $this->requestId = $requestId;
        $this->retryIndicator = $retryIndicator;

        if (null === $requestId && 0 === $retryIndicator) {
            $this->requestId = uniqid();
        }
    }

    public function getSpecVersion(): string
    {
        return $this->specVersion;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function getRetryIndicator(): int
    {
        return $this->retryIndicator;
    }

    public function getClientInfo(): ?ClientInfo
    {
        return $this->clientInfo;
    }

    public function setClientInfo(?ClientInfo $clientInfo): self
    {
        $this->clientInfo = $clientInfo;

        return $this;
    }
}
