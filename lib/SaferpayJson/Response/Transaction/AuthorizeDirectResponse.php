<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Container\FraudPrevention;
use Ticketpark\SaferpayJson\Response\Container\Liability;
use Ticketpark\SaferpayJson\Response\Container\Payer;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Response\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class AuthorizeDirectResponse extends Response
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
     * @SerializedName("RegisterAlias")
     */
    private ?RegisterAlias $registerAlias = null;

    /**
     * @SerializedName("Payer")
     */
    private ?Payer $payer = null;

    /**
     * @SerializedName("FraudPrevention")
     */
    private ?FraudPrevention $fraudPrevention = null;

    /**
     * @SerializedName("Liability")
     */
    private ?Liability $liability = null;

    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->registerAlias;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function getFraudPrevention(): ?FraudPrevention
    {
        return $this->fraudPrevention;
    }

    public function getLiability(): ?Liability
    {
        return $this->liability;
    }
}
