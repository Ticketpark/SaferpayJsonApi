<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Liability
{
    /**
     * @var bool|null
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    private $liabilityShift;

    /**
     * @var string|null
     * @SerializedName("LiableEntity")
     * @Type("string")
     */
    private $liableEntity;

    /**
     * @var ThreeDs|null
     * @SerializedName("ThreeDs")
     * @Type("Ticketpark\SaferpayJson\Response\Container\ThreeDs")
     */
    private $threeDs;

    /**
     * @var string|null
     * @SerializedName("InPsd2Scope")
     * @Type("string")
     */
    private $inPsd2Scope;

    public function isLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function getLiableEntity(): ?string
    {
        return $this->liableEntity;
    }

    public function getThreeDs(): ?ThreeDs
    {
        return $this->threeDs;
    }

    public function getInPsd2Scope(): ?string
    {
        return $this->inPsd2Scope;
    }
}
