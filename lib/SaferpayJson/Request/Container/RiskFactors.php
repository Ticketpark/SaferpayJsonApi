<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\DeliveryType;

final class RiskFactors
{
    #[SerializedName('DeliveryType')]
    private ?DeliveryType $deliveryType = null;

    #[SerializedName('PayerProfile')]
    private ?PayerProfile $payerProfile = null;

    #[SerializedName('IsB2B')]
    private ?bool $isB2B = null;

    #[SerializedName('DeviceFingerprintTransactionId')]
    private ?string $deviceFingerprintTransactionId = null;

    public function getDeliveryType(): ?DeliveryType
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(?DeliveryType $deliveryType): self
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

    public function getDeviceFingerprintTransactionId(): ?string
    {
        return $this->deviceFingerprintTransactionId;
    }

    public function setDeviceFingerprintTransactionId(?string $deviceFingerprintTransactionId): self
    {
        $this->deviceFingerprintTransactionId = $deviceFingerprintTransactionId;

        return $this;
    }
}
