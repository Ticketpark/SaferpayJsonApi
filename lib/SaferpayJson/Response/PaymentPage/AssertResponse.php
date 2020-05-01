<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Dcc;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegistrationResult;
use Ticketpark\SaferpayJson\Container\ThreeDs;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

class AssertResponse extends Response
{
    /**
     * @var Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Payer
     * @SerializedName("Payer")
     * @Type("Ticketpark\SaferpayJson\Container\Payer")
     */
    protected $payer;

    /**
     * @var RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Ticketpark\SaferpayJson\Container\RegistrationResult")
     */
    protected $registrationResult;

    /**
     * @var Liability
     * @SerializedName("Liability")
     * @Type("Ticketpark\SaferpayJson\Container\Liability")
     */
    protected $liability;

    /**
     * @var Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    protected $dcc;

    /**
     * @var MastercardIssuerInstallments
     * @SerializedName("MastercardIssuerInstallments")
     * @Type("Ticketpark\SaferpayJson\Container\MastercardIssuerInstallments")
     */
    protected $mastercardIssuerInstallments;

    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    public function setTransaction(Transaction $transaction): void
    {
        $this->transaction = $transaction;
    }

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): void
    {
        $this->paymentMeans = $paymentMeans;
    }

    public function getPayer(): Payer
    {
        return $this->payer;
    }

    public function setPayer(Payer $payer): void
    {
        $this->payer = $payer;
    }

    public function getRegistrationResult(): RegistrationResult
    {
        return $this->registrationResult;
    }

    public function setRegistrationResult(RegistrationResult $registrationResult): void
    {
        $this->registrationResult = $registrationResult;
    }

    public function getDcc(): Dcc
    {
        return $this->dcc;
    }

    public function setDcc(Dcc $dcc): void
    {
        $this->dcc = $dcc;
    }
}
