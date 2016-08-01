<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Message\Request;

class AuthorizeDirectRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeDirect';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\AuthorizeDirectResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var Ticketpark\SaferpayJson\Container\Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var Ticketpark\SaferpayJson\Container\Payer
     * @SerializedName("Payer")
     */
    protected $payer;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AuthorizeDirectRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

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
     * @return AuthorizeDirectRequest
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Payment $payment
     * @return AuthorizeDirectRequest
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\PaymentMeans $paymentMeans
     * @return AuthorizeDirectRequest
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\RegisterAlias $registerAlias
     * @return AuthorizeDirectRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

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
     * @return AuthorizeDirectRequest
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }
}