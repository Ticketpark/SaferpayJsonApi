<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegistrationResult;
use Ticketpark\SaferpayJson\Container\ThreeDs;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Message\Response;

class AssertResponse extends Response
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
     * @var Ticketpark\SaferpayJson\Container\ThreeDs
     * @SerializedName("ThreeDs")
     * @Type("Ticketpark\SaferpayJson\Container\ThreeDs")
     */
    protected $threeDs;

    /**
     * @var Ticketpark\SaferpayJson\Container\Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    protected $dcc;

    /**
     * @return Ticketpark\SaferpayJson\Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Transaction $transaction
     * @return AssertResponse
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
     * @return AssertResponse
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param mixed $payer
     * @return AssertResponse
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
     * @return AssertResponse
     */
    public function setRegistrationResult(RegistrationResult $registrationResult)
    {
        $this->registrationResult = $registrationResult;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\ThreeDs
     */
    public function getThreeDs()
    {
        return $this->threeDs;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\ThreeDs $threeDs
     * @return AssertResponse
     */
    public function setThreeDs(ThreeDs $threeDs)
    {
        $this->threeDs = $threeDs;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Dcc
     */
    public function getDcc()
    {
        return $this->dcc;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Dcc $dcc
     * @return AssertResponse
     */
    public function setDcc(Dcc $dcc)
    {
        $this->dcc = $dcc;

        return $this;
    }
}