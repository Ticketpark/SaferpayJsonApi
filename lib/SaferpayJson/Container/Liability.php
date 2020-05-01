<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Liability
{
    /**
     * @var bool
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    protected $liabilityShift;

    /**
     * @var string
     * @SerializedName("LiableEntity")
     * @Type("string")
     */
    protected $liableEntity;

    /**
     * @var ThreeDs
     * @SerializedName("ThreeDs")
     * @Type("Ticketpark\SaferpayJson\Container\ThreeDs")
     */
    protected $threeDs;

    public function isLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function setLiabilityShift(bool $liabilityShift): self
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    public function getLiableEntity(): ?string
    {
        return $this->liableEntity;
    }

    public function setLiableEntity(string $liableEntity): self
    {
        $this->liableEntity = $liableEntity;

        return $this;
    }

    public function getThreeDs(): ?ThreeDs
    {
        return $this->threeDs;
    }

    public function setThreeDs(ThreeDs $threeDs): self
    {
        $this->threeDs = $threeDs;

        return $this;
    }
}
