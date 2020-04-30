<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Authentication
{
    const EXEMPTION_LOW_VALUE = 'LOW_VALUE';
    const EXEMPTION_TRANSACTION_RISK_ANALYSIS = 'TRANSACTION_RISK_ANALYSIS';

    const EXEMPTION_THREEDSCHALLENGE_AVOID = 'AVOID';
    const EXEMPTION_THREEDSCHALLENGE_FORCE = 'FORCE';

    /**
     * @var string
     * @SerializedName("Exemption")
     * @Type("string")
     */
    protected $exemption;

    /**
     * @var string
     * @SerializedName("ThreeDsChallenge")
     * @Type("string")
     */
    protected $threeDsChallenge;

    public function getExemption(): ?string
    {
        return $this->exemption;
    }

    public function setExemption(string $exemption): self
    {
        $this->exemption = $exemption;

        return $this;
    }

    public function getThreeDsChallenge(): ?string
    {
        return $this->threeDsChallenge;
    }

    public function setThreeDsChallenge(string $threeDsChallenge): self
    {
        $this->threeDsChallenge = $threeDsChallenge;

        return $this;
    }
}
