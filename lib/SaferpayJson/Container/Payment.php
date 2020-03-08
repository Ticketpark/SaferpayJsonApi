<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Payment
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Description")
     */
    protected $description;

    /**
     * @var string
     * @SerializedName("PayerNote")
     */
    protected $payerNote;

    /**
     * @var Recurring
     * @SerializedName("Recurring")
     */
    protected $recurring;

    /**
     * @return Ticketpark\SaferpayJson\Container\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Amount $amount
     * @return Payment
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
     * @return Payment
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
     * @return Payment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayerNote()
    {
        return $this->payerNote;
    }

    /**
     * @param string $payerNote
     * @return Payment
     */
    public function setPayerNote($payerNote)
    {
        $this->payerNote = $payerNote;

        return $this;
    }

    /**
     * @return Recurring
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * @param Recurring $recurring
     * @return Payment
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;

        return $this;
    }


}