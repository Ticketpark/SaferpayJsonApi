<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class MastercardIssuerInstallments
{
    /**
     * @SerializedName("ChosenPlan")
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
