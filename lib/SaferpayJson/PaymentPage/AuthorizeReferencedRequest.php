<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Message\Request;

class AuthorizeReferencedRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeReferenced';

    const RESPONSE_CLASS = AuthorizeReferencedResponse::class;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    public function setTerminalId(string $terminalId): self
    {
        $this->terminalId = $terminalId;

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

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }
}
