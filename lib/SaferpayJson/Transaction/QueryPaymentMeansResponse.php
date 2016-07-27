<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Message\Response;

class QueryPaymentMeansResponse extends Response
{
    /**
     * @var Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Ticketpark\SaferpayJson\Container\Payer
     * @SerializedName("Payer")
     * @Type("Ticketpark\SaferpayJson\Container\Payer")
     */
    protected $payer;

    /**
     * @var bool
     * @SerializedName("RedirectRequired")
     * @Type("boolean")
     */
    protected $redirectRequired;

    /**
     * @var string
     * @SerializedName("RedirectUrl")
     * @Type("string")
     */
    protected $redirectUrl;

    /**
     * @return Ticketpark\SaferpayJson\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\PaymentMeans $paymentMeans
     * @return QueryPaymentMeansResponse
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
     * @return QueryPaymentMeansResponse
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isRedirectRequired()
    {
        return $this->redirectRequired;
    }

    /**
     * @param boolean $redirectRequired
     * @return QueryPaymentMeansResponse
     */
    public function setRedirectRequired($redirectRequired)
    {
        $this->redirectRequired = $redirectRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return QueryPaymentMeansResponse
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }
}