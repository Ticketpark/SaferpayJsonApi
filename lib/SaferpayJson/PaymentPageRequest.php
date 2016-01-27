<?php

namespace Ticketpark\SaferpayJson;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Notification;
use Ticketpark\SaferpayJson\Request\Payer;
use Ticketpark\SaferpayJson\Request\Payment;
use Ticketpark\SaferpayJson\Request\ReturnUrls;
use Ticketpark\SaferpayJson\Request\Request;

class PaymentPageRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Initialize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\PaymentPageResponse';

    /**
     * @var Ticketpark\SaferpayJson\Request\Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var Ticketpark\SaferpayJson\Request\Payer
     * @SerializedName("Payer")
     */
    protected $payer;

    /**
     * @var Ticketpark\SaferpayJson\Request\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var Ticketpark\SaferpayJson\Request\Notification
     * @SerializedName("Notification")
     */
    protected $notification;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @return Ticketpark\SaferpayJson\Request\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\Payment $payment
     * @return Request
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Request\Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\Payer $payer
     * @return Request
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Request\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\ReturnUrls $returnUrls
     * @return Request
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Request\Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\Notification $notification
     * @return PaymentPageRequest
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
     * @return Request
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }
}