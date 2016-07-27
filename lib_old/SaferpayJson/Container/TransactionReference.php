<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class TransactionReference
{
    /**
     * @var string
     * @SerializedName("TransactionId")
     */
    protected $transactionId;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return TransactionReference
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

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
     * @return TransactionReference
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }
}