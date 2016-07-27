<?php

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

    /**
     * @return Ticketpark\SaferpayJson\Container\Amount
     */
    public function getPayerAmount()
    {
        return $this->payerAmount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Amount $payerAmount
     * @return Dcc
     */
    public function setPayerAmount($payerAmount)
    {
        $this->payerAmount = $payerAmount;

        return $this;
    }
}