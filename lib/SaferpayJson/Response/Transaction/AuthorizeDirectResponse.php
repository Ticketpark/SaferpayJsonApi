<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
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
     * @var RegisterAlias|null
     * @SerializedName("RegisterAlias")
     * @Type("Ticketpark\SaferpayJson\Response\Container\RegisterAlias")
     */
    private $registerAlias;

    /**
     * @var Payer|null
     * @SerializedName("Payer")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Payer")
     */
    private $payer;

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
