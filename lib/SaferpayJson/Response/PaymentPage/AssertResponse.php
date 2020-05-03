<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Dcc;
use Ticketpark\SaferpayJson\Container\Liability;
use Ticketpark\SaferpayJson\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegistrationResult;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class AssertResponse extends Response
{
    /**
     * @var Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    private $transaction;

    /**
     * @var PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var Payer
     * @SerializedName("Payer")
     * @Type("Ticketpark\SaferpayJson\Container\Payer")
     */
    private $payer;

    /**
     * @var RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Ticketpark\SaferpayJson\Container\RegistrationResult")
     */
    private $registrationResult;

    /**
     * @var Liability
     * @SerializedName("Liability")
     * @Type("Ticketpark\SaferpayJson\Container\Liability")
     */
    private $liability;

    /**
     * @var Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    private $dcc;

    /**
     * @var MastercardIssuerInstallments
     * @SerializedName("MastercardIssuerInstallments")
     * @Type("Ticketpark\SaferpayJson\Container\MastercardIssuerInstallments")
     */
    private $mastercardIssuerInstallments;

    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function getRegistrationResult(): ?RegistrationResult
    {
        return $this->registrationResult;
    }

    public function getDcc(): ?Dcc
    {
        return $this->dcc;
    }
}
