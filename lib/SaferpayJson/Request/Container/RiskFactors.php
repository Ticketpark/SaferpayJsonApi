<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RiskFactors
{
    const DELIVERY_TYPE_EMAIL = "EMAIL";
    const DELIVERY_TYPE_SHOP = "SHOP";
    const DELIVERY_TYPE_HOMEDELIVERY = "HOMEDELIVERY";
    const DELIVERY_TYPE_PICKUP = "PICKUP";
    const DELIVERY_TYPE_HQ = "HQ";

    /**
     * @var string|null
     * @SerializedName("DeliveryType")
     */
    private $deliveryType;

    /**
     * @var string|null
     * @SerializedName("AccountCreationDate")
     * @Type("string")
     */
    private $accountCreationDate;

    /**
     * @var string|null
     * @SerializedName("PasswordLastChangeDate")
     * @Type("string")
     */
    private $passwordLastChangeDate;

    /**
     * @var PayerProfile|null
     * @SerializedName("PayerProfile")
     */
    private $payerProfile;


    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }


    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }


    public function getAccountCreationDate(): ?string
    {
        return $this->accountCreationDate;
    }


    public function setAccountCreationDate(?string $accountCreationDate): self
    {
        $this->accountCreationDate = $accountCreationDate;

        return $this;
    }


    public function getPasswordLastChangeDate(): ?string
    {
        return $this->passwordLastChangeDate;
    }


    public function setPasswordLastChangeDate(?string $passwordLastChangeDate): self
    {
        $this->passwordLastChangeDate = $passwordLastChangeDate;

        return $this;
    }

    /**
     * @return PayerProfile|null
     */
    public function getPayerProfile(): ?PayerProfile
    {
        return $this->payerProfile;
    }

    /**
     * @param PayerProfile|null $payerProfile
     * @return RiskFactors
     */
    public function setPayerProfile(?PayerProfile $payerProfile): self
    {
        $this->payerProfile = $payerProfile;

        return $this;
    }
}
