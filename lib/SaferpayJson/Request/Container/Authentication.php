<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Authentication
{
    public const string EXEMPTION_LOW_VALUE = 'LOW_VALUE';
    public const string EXEMPTION_TRANSACTION_RISK_ANALYSIS = 'TRANSACTION_RISK_ANALYSIS';
    public const string EXEMPTION_RECURRING = 'RECURRING';

    public const string THREEDSCHALLENGE_FORCE = 'FORCE';
    public const string THREEDSCHALLENGE_AVOID = 'AVOID';

    #[SerializedName('Exemption')]
    private ?string $exemption = null;

    #[SerializedName('ThreeDsChallenge')]
    private ?string $threeDsChallenge = null;

    #[SerializedName('ExternalThreeDS')]
    private ?ExternalThreeDS $externalThreeDS = null;

    public function getExemption(): ?string
    {
        return $this->exemption;
    }

    public function setExemption(?string $exemption): self
    {
        $this->exemption = $exemption;

        return $this;
    }

    public function getThreeDsChallenge(): ?string
    {
        return $this->threeDsChallenge;
    }

    public function setThreeDsChallenge(?string $threeDsChallenge): self
    {
        $this->threeDsChallenge = $threeDsChallenge;

        return $this;
    }

    public function getExternalThreeDS(): ?ExternalThreeDS
    {
        return $this->externalThreeDS;
    }

    public function setExternalThreeDS(?ExternalThreeDS $externalThreeDS): self
    {
        $this->externalThreeDS = $externalThreeDS;

        return $this;
    }
}
