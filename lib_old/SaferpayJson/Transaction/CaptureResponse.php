<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Invoice;
use Ticketpark\SaferpayJson\Message\Response;

class CaptureResponse extends Response
{
    /**
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    protected $date;

    /**
     * @var Ticketpark\SaferpayJson\Container\Invoice
     * @SerializedName("Invoice")
     * @Type("Ticketpark\SaferpayJson\Container\Invoice")
     */
    protected $invoice;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return CaptureResponse
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
     * @return CaptureResponse
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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
     * @return CaptureResponse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Invoice $invoice
     * @return CaptureResponse
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }
}