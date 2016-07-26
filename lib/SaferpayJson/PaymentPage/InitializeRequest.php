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
}