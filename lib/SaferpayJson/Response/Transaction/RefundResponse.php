<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Dcc;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Response;

final class RefundResponse extends Response
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
     * @var Dcc|null
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Dcc")
     */
    private $dcc;

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
