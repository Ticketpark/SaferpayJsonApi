<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\InPsd2Scope;
use Ticketpark\SaferpayJson\Response\Enum\LiableEntity;

final class Liability
{
    #[SerializedName('LiabilityShift')]
    private ?bool $liabilityShift = null;

    #[SerializedName('LiableEntity')]
    private ?LiableEntity $liableEntity = null;

    #[SerializedName('ThreeDs')]
    private ?ThreeDs $threeDs = null;

    #[SerializedName('InPsd2Scope')]
    private ?InPsd2Scope $inPsd2Scope = null;

    public function isLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function getLiableEntity(): ?LiableEntity
    {
        return $this->liableEntity;
    }

    public function getThreeDs(): ?ThreeDs
    {
        return $this->threeDs;
    }

    public function getInPsd2Scope(): ?InPsd2Scope
    {
        return $this->inPsd2Scope;
    }
}
