<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Dcc
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("PayerAmount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $payerAmount;

    public function getPayerAmount(): Amount
    {
        return $this->payerAmount;
    }

    public function setPayerAmount(Amount $payerAmount): self
    {
        $this->payerAmount = $payerAmount;

        return $this;
    }
}
