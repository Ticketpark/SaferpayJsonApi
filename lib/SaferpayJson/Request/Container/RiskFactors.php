<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RiskFactors
{
    public const DELIVERY_TYPE_EMAIL = "EMAIL";
    public const DELIVERY_TYPE_SHOP = "SHOP";
    public const DELIVERY_TYPE_HOMEDELIVERY = "HOMEDELIVERY";
    public const DELIVERY_TYPE_PICKUP = "PICKUP";
    public const DELIVERY_TYPE_HQ = "HQ";

    /**
     * @SerializedName("DeliveryType")
     */
    private ?string $deliveryType = null;

    /**
     * @SerializedName("PayerProfile")
     * @Type("Ticketpark\SaferpayJson\Request\Container\PayerProfile")
     */
    private ?PayerProfile $payerProfile = null;

    /**
     * @SerializedName("IsB2B")
     */
    private ?bool $isB2B = null;

    /**
     * @SerializedName("DeviceFingerprint")
     */
    private ?string $deviceFingerprint = null;

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function getPayerProfile(): ?PayerProfile
    {
        return $this->payerProfile;
    }

    public function setPayerProfile(?PayerProfile $payerProfile): self
    {
        $this->payerProfile = $payerProfile;

        return $this;
    }

    public function isIsB2B(): ?bool
    {
        return $this->isB2B;
    }

    public function setIsB2B(?bool $isB2B): self
    {
        $this->isB2B = $isB2B;

        return $this;
    }

    public function getDeviceFingerprint(): ?string
    {
        return $this->deviceFingerprint;
    }

    public function setDeviceFingerprint(?string $deviceFingerprint): self
    {
        $this->deviceFingerprint = $deviceFingerprint;

        return $this;
    }
}
