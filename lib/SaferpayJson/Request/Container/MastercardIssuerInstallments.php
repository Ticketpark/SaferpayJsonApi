<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class MastercardIssuerInstallments
{
    /**
     * @SerializedName("ChosenPlan")
     * @Type("array")
     */
    private ?ChosenPlan $chosenPlan = null;

    public function getChosenPlan(): ?ChosenPlan
    {
        return $this->chosenPlan;
    }

    public function setChosenPlan(?ChosenPlan $chosenPlan): self
    {
        $this->chosenPlan = $chosenPlan;

        return $this;
    }
}
