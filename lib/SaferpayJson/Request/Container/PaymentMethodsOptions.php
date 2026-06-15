<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class PaymentMethodsOptions
{
    /**
     * @SerializedName("Klarna")
     */
    private ?Klarna $klarna = null;

    public function getKlarna(): ?Klarna
    {
        return $this->klarna;
    }

    public function setKlarna(?Klarna $klarna): self
    {
        $this->klarna = $klarna;

        return $this;
    }
}
