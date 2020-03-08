<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class RefundRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Refund';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\RefundResponse';

    /**
     * @var Ticketpark\SaferpayJson\Container\Refund
     * @SerializedName("Refund")
     */
    protected $refund;

    /**
     * @var Ticketpark\SaferpayJson\Container\TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    /**
     * @return Ticketpark\SaferpayJson\Container\Refund
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Refund $refund
     * @return RefundRequest
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\TransactionReference
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\TransactionReference $transactionReference
     * @return CaptureRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
