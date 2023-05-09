<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Dcc;
use Ticketpark\SaferpayJson\Response\Container\FraudPrevention;
use Ticketpark\SaferpayJson\Response\Container\Liability;
use Ticketpark\SaferpayJson\Response\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Response\Container\Payer;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Container\RegistrationResult;
use Ticketpark\SaferpayJson\Response\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class AuthorizeResponse extends Response
{
    /**
     * @var Transaction|null
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Transaction")
     */
    private $transaction;

    /**
     * @var PaymentMeans|null
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Response\Container\PaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var Payer|null
     * @SerializedName("Payer")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Payer")
     */
    private $payer;

    /**
     * @var RegistrationResult|null
     * @SerializedName("RegistrationResult")
     * @Type("Ticketpark\SaferpayJson\Response\Container\RegistrationResult")
     */
    private $registrationResult;

    /**
     * @var MastercardIssuerInstallments|null
     * @SerializedName("MastercardIssuerInstallments")
     * @Type("Ticketpark\SaferpayJson\Response\Container\MastercardIssuerInstallments")
     */
    private $mastercardIssuerInstallments;

    /**
     * @var FraudPrevention|null
     * @SerializedName("FraudPrevention")
     * @Type("Ticketpark\SaferpayJson\Response\Container\FraudPrevention")
     */
    private $fraudPrevention;

    /**
     * @var Liability|null
     * @SerializedName("Liability")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Liability")
     */
    private $liability;

    /**
     * @var Dcc|null
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Dcc")
     */
    private $dcc;

    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }
    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getRegistrationResult(): ?RegistrationResult
    {
        return $this->registrationResult;
    }

    public function getMastercardIssuerInstallments(): ?MastercardIssuerInstallments
    {
        return $this->mastercardIssuerInstallments;
    }

    public function getFraudPrevention(): ?FraudPrevention
    {
        return $this->fraudPrevention;
    }

    public function getLiability(): ?Liability
    {
        return $this->liability;
    }

    public function getDcc(): ?Dcc
    {
        return $this->dcc;
    }
}
