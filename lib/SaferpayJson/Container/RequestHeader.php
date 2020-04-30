<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class RequestHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     */
    protected $specVersion = '1.16';

    /**
     * @var string
     * @SerializedName("CustomerId")
     */
    protected $customerId;

    /**
     * @var string
     * @SerializedName("RequestId")
     */
    protected $requestId;

    /**
     * @var int
     * @SerializedName("RetryIndicator")
     */
    protected $retryIndicator = 0;

    /**
     * @var ClientInfo
     * @SerializedName("ClientInfo")
     */
    protected $clientInfo;

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

    public function setSpecVersion(string $specVersion): self
    {
        $this->specVersion = $specVersion;

        return $this;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getRetryIndicator(): int
    {
        return $this->retryIndicator;
    }

    public function setRetryIndicator(int $retryIndicator): self
    {
        $this->retryIndicator = $retryIndicator;

        return $this;
    }

    public function getClientInfo(): ?ClientInfo
    {
        return $this->clientInfo;
    }

    public function setClientInfo(ClientInfo $clientInfo): self
    {
        $this->clientInfo = $clientInfo;

        return $this;
    }
}
