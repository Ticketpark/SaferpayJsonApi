<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class CaptureRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Capture';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\CaptureResponse';

    /**
     * @var Ticketpark\SaferpayJson\Container\TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

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