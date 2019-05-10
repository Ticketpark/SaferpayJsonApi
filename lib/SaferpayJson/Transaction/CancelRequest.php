<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class CancelRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Cancel';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\CancelResponse';

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
     * @return CancelRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
