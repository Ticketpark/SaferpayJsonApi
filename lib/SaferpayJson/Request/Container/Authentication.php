<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Authentication
{
    const EXEMPTION_LOW_VALUE = 'LOW_VALUE';
    const EXEMPTION_TRANSACTION_RISK_ANALYSIS = 'TRANSACTION_RISK_ANALYSIS';
    const EXEMPTION_RECURRING = 'RECURRING';

    const THREEDSCHALLENGE_FORCE = 'FORCE';
    const THREEDSCHALLENGE_AVOID = 'AVOID';

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
