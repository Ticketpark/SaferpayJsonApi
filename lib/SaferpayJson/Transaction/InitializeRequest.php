<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Container\Styling;
use Ticketpark\SaferpayJson\Container\Wallet;
use Ticketpark\SaferpayJson\Message\Request;

class InitializeRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Initialize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\InitializeResponse';

    /**
     * @var string
     * @SerializedName("ConfigSet")
     */
    protected $configSet;

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
     * @var Ticketpark\SaferpayJson\Container\Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @var Ticketpark\SaferpayJson\Container\Wallet
     * @SerializedName("Wallet")
     */
    protected $wallet;

    /**
     * @return string
     */
    public function getConfigSet()
    {
        return $this->configSet;
    }

    /**
     * @param string $configSet
     * @return CaptureRequest
     */
    public function setConfigSet($configSet)
    {
        $this->configSet = $configSet;

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
     * @return CaptureRequest
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
     * @return CaptureRequest
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
     * @return CaptureRequest
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

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
     * @return CaptureRequest
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
     * @return CaptureRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Styling
     */
    public function getStyling()
    {
        return $this->styling;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Styling $styling
     * @return CaptureRequest
     */
    public function setStyling(Styling $styling)
    {
        $this->styling = $styling;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Wallet
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Wallet $wallet
     * @return CaptureRequest
     */
    public function setWallet(Wallet $wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }
}