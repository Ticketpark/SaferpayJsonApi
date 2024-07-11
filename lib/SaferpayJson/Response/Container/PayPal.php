<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class PayPal
{
    /**
     * @SerializedName("PayerId")
     */
    private ?string $payerId = null;

    /**
     * @SerializedName("SellerProtectionStatus")
     */
    private ?string $sellerProtectionStatus = null;

    /**
     * @SerializedName("Email")
     */
    private ?string $email = null;

    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    public function getSellerProtectionStatus(): ?string
    {
        return $this->sellerProtectionStatus;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
