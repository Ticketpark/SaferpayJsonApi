<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Uuid;

final class RequestHeader
{
    #[SerializedName('SpecVersion')]
    private string $specVersion = '1.52';

    #[SerializedName('RequestId')]
    private readonly ?string $requestId;

    #[SerializedName('ClientInfo')]
    private ?ClientInfo $clientInfo = null;

    public function __construct(
        #[SerializedName('CustomerId')]
        private readonly string $customerId,
        ?string $requestId = null,
        #[SerializedName('RetryIndicator')]
        private readonly int $retryIndicator = RequestConfig::MIN_RETRY_INDICATOR,
    ) {
        $this->requestId = null === $requestId && 0 === $retryIndicator ? Uuid::v4() : $requestId;
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
