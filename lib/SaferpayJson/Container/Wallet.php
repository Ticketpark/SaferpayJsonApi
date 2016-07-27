<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Wallet
{
    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type = 'MASTERPASS';

    /**
     * @var array
     * @SerializedName("PaymentMethods")
     * @Type("array")
     */
    protected $paymentMethods = array();

    /**
     * @var bool
     * @SerializedName("RequestDeliveryAddress")
     * @Type("boolean")
     */
    protected $requestDeliveryAddress;

    /**
     * @var bool
     * @SerializedName("EnableAmountAdjustment")
     * @Type("boolean")
     */
    protected $enableAmountAdjustment;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Wallet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     * @return Wallet
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isRequestDeliveryAddress()
    {
        return $this->requestDeliveryAddress;
    }

    /**
     * @param boolean $requestDeliveryAddress
     * @return Wallet
     */
    public function setRequestDeliveryAddress($requestDeliveryAddress)
    {
        $this->requestDeliveryAddress = $requestDeliveryAddress;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnableAmountAdjustment()
    {
        return $this->enableAmountAdjustment;
    }

    /**
     * @param boolean $enableAmountAdjustment
     * @return Wallet
     */
    public function setEnableAmountAdjustment($enableAmountAdjustment)
    {
        $this->enableAmountAdjustment = $enableAmountAdjustment;

        return $this;
    }
}