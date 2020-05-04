<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Refund
{
    /**
     * @var Amount|null
     * @SerializedName("Amount")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Amount")
     */
    private $amount;

    /**
     * @var string|null
     * @SerializedName("OrderId")
     */
    private $orderId;

    /**
     * @var string|null
     * @SerializedName("Description")
     */
    private $description;

    public function __construct(?Amount $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    public function setAmount(?Amount $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
