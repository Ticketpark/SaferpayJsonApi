<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class RequestHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     */
    private $specVersion = '1.18';

    /**
     * @var string
     * @SerializedName("CustomerId")
     */
    private $customerId;

    /**
     * @var string|null
     * @SerializedName("RequestId")
     */
    private $requestId;

    /**
     * @var int
     * @SerializedName("RetryIndicator")
     */
    private $retryIndicator = 0;

    /**
     * @var ClientInfo|null
     * @SerializedName("ClientInfo")
     */
    private $clientInfo;

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
