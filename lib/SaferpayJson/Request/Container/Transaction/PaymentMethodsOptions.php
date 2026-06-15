<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PaymentMethodsOptions
{
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
}
