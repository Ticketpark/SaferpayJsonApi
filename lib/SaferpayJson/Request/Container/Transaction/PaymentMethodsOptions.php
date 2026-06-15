<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Request\Container\A2a;

final class PaymentMethodsOptions
{
    /**
     * @var A2a|null
     *
     * @SerializedName("A2A")
     *
     * @Type("Ticketpark\SaferpayJson\Request\Container\A2a")
     */
    private $a2a;

    /**
     * @var Ideal|null
     *
     * @SerializedName("Ideal")
     *
     * @Type("Ticketpark\SaferpayJson\Request\Container\Transaction\Ideal")
     */
    private $ideal;

    public function getIdeal(): ?Ideal
    {
        return $this->ideal;
    }

    public function setIdeal(?Ideal $ideal): self
    {
        $this->ideal = $ideal;

        return $this;
    }

    public function getA2a(): ?A2a
    {
        return $this->a2a;
    }

    public function setA2a(?A2a $a2a): self
    {
        $this->a2a = $a2a;

        return $this;
    }
}
