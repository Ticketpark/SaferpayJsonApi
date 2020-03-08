<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Refund;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Message\Request;

class RefundRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Refund';

    const RESPONSE_CLASS = RefundResponse::class;

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

    public function getRefund(): Refund
    {
        return $this->refund;
    }

    public function setRefund(Refund $refund): self
    {
        $this->refund = $refund;

        return $this;
    }

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
