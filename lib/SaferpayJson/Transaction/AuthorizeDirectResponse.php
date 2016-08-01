<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Message\Response;

class AuthorizeDirectResponse extends Response
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    protected $transaction;

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
     * @var Ticketpark\SaferpayJson\Container\RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Ticketpark\SaferpayJson\Container\RegistrationResult")
     */
    protected $registrationResult;

    /**
     * @return Ticketpark\SaferpayJson\Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Transaction $transaction
     * @return AuthorizeDirectResponse
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;

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
     * @return AuthorizeDirectResponse
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
     * @return AuthorizeDirectResponse
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\RegistrationResult
     */
    public function getRegistrationResult()
    {
        return $this->registrationResult;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\RegistrationResult $registrationResult
     * @return AuthorizeDirectResponse
     */
    public function setRegistrationResult(RegistrationResult $registrationResult)
    {
        $this->registrationResult = $registrationResult;

        return $this;
    }
}