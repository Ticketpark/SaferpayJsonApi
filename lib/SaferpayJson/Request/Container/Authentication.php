<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\AuthenticationExemption;
use Ticketpark\SaferpayJson\Request\Enum\ThreeDsChallenge;

final class Authentication
{
    #[SerializedName('Exemption')]
    private ?AuthenticationExemption $exemption = null;

    #[SerializedName('ThreeDsChallenge')]
    private ?ThreeDsChallenge $threeDsChallenge = null;

    #[SerializedName('ExternalThreeDS')]
    private ?ExternalThreeDS $externalThreeDS = null;

    #[SerializedName('IssuerReference')]
    private ?IssuerReference $issuerReference = null;

    public function getExemption(): ?AuthenticationExemption
    {
        return $this->exemption;
    }

    public function setExemption(?AuthenticationExemption $exemption): self
    {
        $this->exemption = $exemption;

        return $this;
    }

    public function getThreeDsChallenge(): ?ThreeDsChallenge
    {
        return $this->threeDsChallenge;
    }

    public function setThreeDsChallenge(?ThreeDsChallenge $threeDsChallenge): self
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

    public function getIssuerReference(): ?IssuerReference
    {
        return $this->issuerReference;
    }

    public function setIssuerReference(?IssuerReference $issuerReference): self
    {
        $this->issuerReference = $issuerReference;

        return $this;
    }
}
