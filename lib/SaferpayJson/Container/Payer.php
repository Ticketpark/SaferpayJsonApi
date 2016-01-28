<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Payer
{
    /**
     * @var string
     * @SerializedName("IpAddress")
     * @Type("string")
     */
    protected $ipAddress;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var Ticketpark\SaferpayJson\Container\Address
     * @SerializedName("DeliveryAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    protected $deliveryAddress;

    /**
     * @var Ticketpark\SaferpayJson\Container\Address
     * @SerializedName("BillingAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    protected $billingAddress;

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return Payer
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     * @return Payer
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Address
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Address $deliveryAddress
     * @return Payer
     */
    public function setDeliveryAddress(Address $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Address $billingAddress
     * @return Payer
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }


}