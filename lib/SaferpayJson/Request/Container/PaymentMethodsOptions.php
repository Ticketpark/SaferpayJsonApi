<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PaymentMethodsOptions
{
    /**
     * @var Ideal|null
     * @SerializedName("Ideal")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Ideal")
     */
    private ?Ideal $ideal = null;

    /**
     * @SerializedName("Klarna")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Klarna")
     */
    private ?Klarna $klarna = null;

    public function getIdeal(): ?Ideal
    {
        return $this->ideal;
    }

    public function setIdeal(?Ideal $ideal): self
    {
        $this->ideal = $ideal;

        return $this;
    }

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
