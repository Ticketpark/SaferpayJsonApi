<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Liability
{
    /**
     * @SerializedName("LiabilityShift")
     */
    private ?bool $liabilityShift = null;

    /**
     * @SerializedName("LiableEntity")
     */
    private ?string $liableEntity = null;

    /**
     * @SerializedName("ThreeDs")
     */
    private ?ThreeDs $threeDs = null;

    /**
     * @SerializedName("InPsd2Scope")
     */
    private ?string $inPsd2Scope = null;

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
