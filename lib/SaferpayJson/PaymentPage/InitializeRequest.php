<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Notification;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Message\Request;

class InitializeRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Initialize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\PaymentPage\InitializeResponse';

    const PAYMENT_METHOD_AMEX = "AMEX";
    const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    const PAYMENT_METHOD_BONUS = "BONUS";
    const PAYMENT_METHOD_DINERS = "DINERS";
    const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    const PAYMENT_METHOD_EPRZELEWY = "EPRZELEWY";
    const PAYMENT_METHOD_EPS = "EPS";
    const PAYMENT_METHOD_GIROPAY = "GIROPAY";
    const PAYMENT_METHOD_IDEAL = "IDEAL";
    const PAYMENT_METHOD_INVOICE = "INVOICE";
    const PAYMENT_METHOD_JCB = "JCB";
    const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    const PAYMENT_METHOD_MYONE = "MYONE";
    const PAYMENT_METHOD_PAYPAL = "PAYPAL";
    const PAYMENT_METHOD_POSTCARD = "POSTCARD";
    const PAYMENT_METHOD_POSTFINANCE = "POSTFINANCE";
    const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    const PAYMENT_METHOD_SOFORT = "SOFORT";
    const PAYMENT_METHOD_TWINT = "TWINT";
    const PAYMENT_METHOD_VISA = "VISA";
    const PAYMENT_METHOD_VPAY = "VPAY";

    /**
     * @var Ticketpark\SaferpayJson\Container\Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var Ticketpark\SaferpayJson\Container\Payer
     * @SerializedName("Payer")
     */
    protected $payer;

    /**
     * @var Ticketpark\SaferpayJson\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var Ticketpark\SaferpayJson\Container\Notification
     * @SerializedName("Notification")
     */
    protected $notification;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var array
     * @SerializedName("PaymentMethods")
     */
    protected $paymentMethods;

    /**
     * @return Ticketpark\SaferpayJson\Container\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Payment $payment
     * @return InitializeRequest
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Payer $payer
     * @return InitializeRequest
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\ReturnUrls $returnUrls
     * @return InitializeRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Notification $notification
     * @return InitializeRequest
     */
    public function setNotification(Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return InitializeRequest
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     * @return InitializeRequest
     */
    public function setPaymentMethods(array $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }
}
