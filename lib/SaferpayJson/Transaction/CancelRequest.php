<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Message\Request;

class CancelRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Cancel';

    const RESPONSE_CLASS = CancelResponse::class;

    /**
     * @var Ticketpark\SaferpayJson\Container\TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(TransactionReference $transactionReference): self
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
