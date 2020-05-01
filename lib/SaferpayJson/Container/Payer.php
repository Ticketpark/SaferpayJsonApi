<?php declare(strict_types=1);

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
     * @SerializedName("IpLocation")
     * @Type("string")
     */
    protected $ipLocation;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var Address
     * @SerializedName("DeliveryAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    protected $deliveryAddress;

    /**
     * @var Address
     * @SerializedName("BillingAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    protected $billingAddress;

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }

    public function setIpLocation(string $ipLocation): self
    {
        $this->ipLocation = $ipLocation;

        return $this;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(Address $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
}
