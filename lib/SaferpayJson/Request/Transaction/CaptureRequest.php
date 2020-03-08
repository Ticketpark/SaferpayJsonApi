<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;

class CaptureRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Capture';
    const RESPONSE_CLASS = CaptureResponse::class;

    use RequestCommonsTrait;

    /**
     * @var TransactionReference
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
