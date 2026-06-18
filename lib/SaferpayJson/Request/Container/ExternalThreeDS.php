<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ExternalThreeDS
{
    public const AUTHENTICATION_MODE_CHALLENGE = 'CHALLENGE';
    public const AUTHENTICATION_MODE_FRICTIONLESS = 'FRICTIONLESS';

    public const SCHEME_MASTERCARD = 'MASTERCARD';
    public const SCHEME_VISA = 'VISA';
    public const SCHEME_JCB = 'JCB';
    public const SCHEME_DINERS = 'DINERS';
    public const SCHEME_AMEX = 'AMEX';

    public const TRANS_STATUS_Y = 'Y';
    public const TRANS_STATUS_A = 'A';
    public const TRANS_STATUS_U = 'U';
    public const TRANS_STATUS_I = 'I';

    #[SerializedName('AuthenticationMode')]
    private ?string $authenticationMode = null;

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
        private readonly string $scheme,
        #[SerializedName('ThreeDsFullVersion')]
        private readonly string $threeDsFullVersion,
        #[SerializedName('ThreeDSServerTransId')]
        private readonly string $threeDSServerTransId,
        #[SerializedName('TransStatus')]
        private readonly string $transStatus,
    ) {
    }

    public function getAcsTransId(): string
    {
        return $this->acsTransId;
    }

    public function getAuthenticationMode(): ?string
    {
        return $this->authenticationMode;
    }

    public function setAuthenticationMode(?string $authenticationMode): self
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

    public function getScheme(): string
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

    public function getTransStatus(): string
    {
        return $this->transStatus;
    }
}
