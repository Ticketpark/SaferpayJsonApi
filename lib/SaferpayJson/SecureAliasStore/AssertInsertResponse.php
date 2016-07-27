<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Alias;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Message\Response;

class AssertInsertResponse extends Response
{
    /**
     * @var \Ticketpark\SaferpayJson\Container\Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @var Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return \Ticketpark\SaferpayJson\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Alias $alias
     * @return AssertInsertResponse
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

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
     * @return AssertInsertResponse
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }
}