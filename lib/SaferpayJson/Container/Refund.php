<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Refund
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("Amount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $amount;

    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Description")
     * @Type("string")
     */
    protected $description;

    /**
     * @return Ticketpark\SaferpayJson\Container\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Amount $amount
     * @return Transaction
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return Transaction
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Refund
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}