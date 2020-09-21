<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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
     * @var Address|null
     * @SerializedName("DeliveryAddress")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Address")
     */
    private $deliveryAddress;

    /**
     * @var Address|null
     * @SerializedName("BillingAddress")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Address")
     */
    private $billingAddress;

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
