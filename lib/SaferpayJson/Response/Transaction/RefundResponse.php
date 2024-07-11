<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Container\Dcc;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class RefundResponse extends Response
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
     * @SerializedName("Dcc")
     */
    private ?Dcc $dcc = null;

    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getDcc(): ?Dcc
    {
        return $this->dcc;
    }
}
