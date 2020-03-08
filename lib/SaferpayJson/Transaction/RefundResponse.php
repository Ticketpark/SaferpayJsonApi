<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Message\Response;

class RefundResponse extends Response
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Ticketpark\SaferpayJson\Container\Dcc
     * @SerializedName("Dcc")
     * @Type("Ticketpark\SaferpayJson\Container\Dcc")
     */
    protected $dcc;

    /**
     * @return Ticketpark\SaferpayJson\Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Transaction $transaction
     * @return RefundResponse
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\PaymentMeans $paymentMeans
     * @return RefundResponse
     */
    public function setPaymentMeans($paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Dcc
     */
    public function getDcc()
    {
        return $this->dcc;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Dcc $dcc
     * @return RefundResponse
     */
    public function setDcc($dcc)
    {
        $this->dcc = $dcc;

        return $this;
    }
}