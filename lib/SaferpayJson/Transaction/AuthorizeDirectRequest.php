<?php declare(strict_types=1);
namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Message\Request;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\PaymentMeans;

/**
 * Class AuthorizeDirectRequest
 * @package Ticketpark\SaferpayJson\Transaction
 */
class AuthorizeDirectRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeDirect';

    const RESPONSE_CLASS = AuthorizeDirectResponse::class;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var \Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    public function setTerminalId(string $terminalId): self
    {
        $this->terminalId = $terminalId;

        return $this;
    }
}
