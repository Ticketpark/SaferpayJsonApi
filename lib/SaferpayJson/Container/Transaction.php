<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Transaction
{
    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var string
     * @SerializedName("Status")
     * @Type("string")
     */
    protected $status;

    /**
     * @var string
     * @SerializedName("Id")
     * @Type("string")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    protected $date;

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
     * @SerializedName("AcquirerName")
     * @Type("string")
     */
    protected $acquirerName;

    /**
     * @var string
     * @SerializedName("AcquirerReference")
     * @Type("string")
     */
    protected $acquirerReference;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Transaction
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Transaction
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Transaction
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

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
    public function getAcquirerName()
    {
        return $this->acquirerName;
    }

    /**
     * @param string $acquirerName
     * @return Transaction
     */
    public function setAcquirerName($acquirerName)
    {
        $this->acquirerName = $acquirerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAcquirerReference()
    {
        return $this->acquirerReference;
    }

    /**
     * @param string $acquirerReference
     * @return Transaction
     */
    public function setAcquirerReference($acquirerReference)
    {
        $this->acquirerReference = $acquirerReference;

        return $this;
    }
}