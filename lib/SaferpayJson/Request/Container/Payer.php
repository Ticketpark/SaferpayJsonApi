<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Payer
{
    /**
     * @var string|null
     * @SerializedName("Id")
     */
    private $id;

    /**
     * @var string|null
     * @SerializedName("IpAddress")
     */
    private $ipAddress;
    /**
     * @var string|null
     * @SerializedName("LanguageCode")
     */
    private $languageCode;

    /**
     * @var Address|null
     * @SerializedName("DeliveryAddress")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Address")
     */
    private $deliveryAddress;

    /**
     * @var Address|null
     * @SerializedName("BillingAddress")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Address")
     */
    private $billingAddress;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

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
