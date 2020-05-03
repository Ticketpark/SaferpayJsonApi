<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Payer
{
    /**
     * @var string|null
     * @SerializedName("IpAddress")
     * @Type("string")
     */
    private $ipAddress;

    /**
     * @var string|null
     * @SerializedName("IpLocation")
     * @Type("string")
     */
    private $ipLocation;

    /**
     * @var string|null
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    private $languageCode;

    /**
     * @var Address|null
     * @SerializedName("DeliveryAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    private $deliveryAddress;

    /**
     * @var Address|null
     * @SerializedName("BillingAddress")
     * @Type("Ticketpark\SaferpayJson\Container\Address")
     */
    private $billingAddress;

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }

    public function setIpLocation(?string $ipLocation): self
    {
        $this->ipLocation = $ipLocation;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?Address $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
}
