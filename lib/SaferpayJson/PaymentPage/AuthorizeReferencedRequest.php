<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Message\Request;

class AuthorizeReferencedRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeReferenced';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\PaymentPage\AuthorizeReferencedResponse';

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

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return AuthorizeReferencedRequest
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return TransactionReference
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * @param TransactionReference $transactionReference
     * @return AuthorizeReferencedRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return AuthorizeReferencedRequest
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }
}
