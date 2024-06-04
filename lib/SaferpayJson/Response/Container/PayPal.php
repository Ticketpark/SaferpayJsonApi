<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PayPal
{
    /**
     * @var string|null
     * @SerializedName("PayerId")
     * @Type("string")
     */
    private $payerId;

    /**
     * @var string|null
     * @SerializedName("SellerProtectionStatus")
     * @Type("string")
     */
    private $sellerProtectionStatus;

    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    public function getSellerProtectionStatus(): ?string
    {
        return $this->sellerProtectionStatus;
    }
}
