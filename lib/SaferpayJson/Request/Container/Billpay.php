<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Billpay
{
    /**
     * @var int|null
     * @SerializedName("DelayInDays")
     */
    private $delayInDays;

    public function getDelayInDays(): ?int
    {
        return $this->delayInDays;
    }

    public function setDelayInDays(?int $delayInDays): self
    {
        $this->delayInDays = $delayInDays;

        return $this;
    }
}
