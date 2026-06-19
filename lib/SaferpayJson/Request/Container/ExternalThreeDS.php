<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\CardScheme;
use Ticketpark\SaferpayJson\Request\Enum\ThreeDsAuthenticationMode;
use Ticketpark\SaferpayJson\Request\Enum\ThreeDsTransStatus;

final class ExternalThreeDS
{
    #[SerializedName('AuthenticationMode')]
    private ?ThreeDsAuthenticationMode $authenticationMode = null;

    public function __construct(
        #[SerializedName('AcsTransId')]
        private readonly string $acsTransId,
        #[SerializedName('AuthenticationTime')]
        private readonly string $authenticationTime,
        #[SerializedName('AuthenticationValue')]
        private readonly string $authenticationValue,
        #[SerializedName('DsTransId')]
        private readonly string $dsTransId,
        #[SerializedName('Eci')]
        private readonly string $eci,
        #[SerializedName('Scheme')]
        private readonly CardScheme $scheme,
        #[SerializedName('ThreeDsFullVersion')]
        private readonly string $threeDsFullVersion,
        #[SerializedName('ThreeDSServerTransId')]
        private readonly string $threeDSServerTransId,
        #[SerializedName('TransStatus')]
        private readonly ThreeDsTransStatus $transStatus,
    ) {
    }

    public function getAcsTransId(): string
    {
        return $this->acsTransId;
    }

    public function getAuthenticationMode(): ?ThreeDsAuthenticationMode
    {
        return $this->authenticationMode;
    }

    public function setAuthenticationMode(?ThreeDsAuthenticationMode $authenticationMode): self
    {
        $this->authenticationMode = $authenticationMode;

        return $this;
    }

    public function getAuthenticationTime(): string
    {
        return $this->authenticationTime;
    }

    public function getAuthenticationValue(): string
    {
        return $this->authenticationValue;
    }

    public function getDsTransId(): string
    {
        return $this->dsTransId;
    }

    public function getEci(): string
    {
        return $this->eci;
    }

    public function getScheme(): CardScheme
    {
        return $this->scheme;
    }

    public function getThreeDsFullVersion(): string
    {
        return $this->threeDsFullVersion;
    }

    public function getThreeDSServerTransId(): string
    {
        return $this->threeDSServerTransId;
    }

    public function getTransStatus(): ThreeDsTransStatus
    {
        return $this->transStatus;
    }
}
