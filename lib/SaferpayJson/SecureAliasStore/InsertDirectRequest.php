<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Message\Request;

class InsertDirectRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/InsertDirect';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\InsertDirectResponse';

    /**
     * @var \Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var Ticketpark\SaferpayJson\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return Ticketpark\SaferpayJson\Container\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\RegisterAlias $registerAlias
     * @return InsertRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

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
     * @return InsertRequest
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }
}