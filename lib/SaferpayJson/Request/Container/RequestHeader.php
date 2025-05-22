<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\RequestConfig;

final class RequestHeader
{
    /**
     * @SerializedName("SpecVersion")
     */
    private string $specVersion = '1.41';

    /**
     * @SerializedName("CustomerId")
     */
    private string $customerId;

    /**
     * @SerializedName("RequestId")
     */
    private ?string $requestId;

    /**
     * @SerializedName("RetryIndicator")
     */
    private int $retryIndicator;

    /**
     * @SerializedName("ClientInfo")
     */
    private ?ClientInfo $clientInfo = null;

    public function __construct(
        string $customerId,
        string $requestId = null,
        int    $retryIndicator = RequestConfig::MIN_RETRY_INDICATOR
    ) {
        $this->customerId = $customerId;
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
