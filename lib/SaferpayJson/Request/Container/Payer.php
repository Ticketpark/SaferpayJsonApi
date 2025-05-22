<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Payer
{
    /**
     * @SerializedName("Id")
     */
    private ?string $id = null;

    /**
     * @SerializedName("IpAddress")
     */
    private ?string $ipAddress = null;
    /**
     * @SerializedName("LanguageCode")
     */
    private ?string $languageCode = null;

    /**
     * @SerializedName("DeliveryAddress")
     */
    private ?Address $deliveryAddress = null;

    /**
     * @SerializedName("BillingAddress")
     */
    private ?Address $billingAddress = null;

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
        if (preg_match('^[a-z]{2}(-[A-Z]{2})?$', $languageCode)) {
            $this->languageCode = $languageCode;
        }

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
