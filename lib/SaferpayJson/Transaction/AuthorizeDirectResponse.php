<?php
namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Transaction;
use Ticketpark\SaferpayJson\Message\Response;

/**
 * Class AuthorizeDirectResponse
 * @package Ticketpark\SaferpayJson\Transaction
 */
class AuthorizeDirectResponse extends Response
{
    /**
     * @var Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var \Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @return \Ticketpark\SaferpayJson\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }
}
