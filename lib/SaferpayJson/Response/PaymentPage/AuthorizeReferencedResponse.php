<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Dcc;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

class AuthorizeReferencedResponse extends Response
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
     * @var Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    protected $dcc;

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

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function setPayer(Payer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getDcc(): ?Dcc
    {
        return $this->dcc;
    }

    public function setDcc(Dcc $dcc): self
    {
        $this->dcc = $dcc;

        return $this;
    }
}
