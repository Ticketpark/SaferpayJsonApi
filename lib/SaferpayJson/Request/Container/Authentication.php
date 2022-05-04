<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Authentication
{
    public const EXEMPTION_LOW_VALUE = 'LOW_VALUE';
    public const EXEMPTION_TRANSACTION_RISK_ANALYSIS = 'TRANSACTION_RISK_ANALYSIS';
    public const EXEMPTION_RECURRING = 'RECURRING';

    public const THREEDSCHALLENGE_FORCE = 'FORCE';
    public const THREEDSCHALLENGE_AVOID = 'AVOID';

    /**
     * @var string|null
     * @SerializedName("Exemption")
     */
    private $exemption;

    /**
     * @var string|null
     * @SerializedName("ThreeDsChallenge")
     */
    private $threeDsChallenge;

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
}
