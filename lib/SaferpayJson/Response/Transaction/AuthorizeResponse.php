<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
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
     * @SerializedName("Transaction")
     */
    private ?Transaction $transaction = null;

    /**
     * @SerializedName("PaymentMeans")
     */
    private ?PaymentMeans $paymentMeans = null;

    /**
     * @SerializedName("Payer")
     */
    private ?Payer $payer = null;

    /**
     * @SerializedName("RegistrationResult")
     */
    private ?RegistrationResult $registrationResult = null;

    /**
     * @SerializedName("MastercardIssuerInstallments")
     */
    private ?MastercardIssuerInstallments $mastercardIssuerInstallments = null;

    /**
     * @SerializedName("FraudPrevention")
     */
    private ?FraudPrevention $fraudPrevention = null;

    /**
     * @SerializedName("Liability")
     */
    private ?Liability $liability = null;

    /**
     * @SerializedName("Dcc")
     */
    private ?Dcc $dcc = null;

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
