<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class RequestHeader
{
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

    public function __construct(string $customerId, string $requestId = null, int $retryIndicator = 0)
    {
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
