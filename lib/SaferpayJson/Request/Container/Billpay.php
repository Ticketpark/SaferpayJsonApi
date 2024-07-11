<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Billpay
{
    /**
     * @SerializedName("DelayInDays")
     */
    private ?int $delayInDays = null;

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
