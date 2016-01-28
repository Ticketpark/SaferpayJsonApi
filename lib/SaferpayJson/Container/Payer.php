<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Payer
{
    /**
     * @var string
     * @SerializedName("IpAddress")
     */
    protected $ipAddress;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     */
    protected $languageCode;

    /**
     * @var Ticketpark\SaferpayJson\Container\Address
     * @SerializedName("DeliveryAddress")
     */
    protected $deliveryAddress;

    /**
     * @var Ticketpark\SaferpayJson\Container\Address
     * @SerializedName("BillingAddress")
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