<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Dcc;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class AuthorizeReferencedResponse extends Response
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
     * @var Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    private $dcc;

    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function getDcc(): ?Dcc
    {
        return $this->dcc;
    }
}
