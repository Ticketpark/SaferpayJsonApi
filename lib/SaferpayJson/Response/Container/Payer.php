<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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
     * @SerializedName("IpLocation")
     */
    private ?string $ipLocation = null;

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

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }
}
