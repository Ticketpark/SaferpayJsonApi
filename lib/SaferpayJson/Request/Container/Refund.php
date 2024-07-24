<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Refund
{
    /**
     * @SerializedName("Amount")
     */
    private ?Amount $amount;

    /**
     * @SerializedName("OrderId")
     */
    private ?string $orderId = null;

    /**
     * @SerializedName("Description")
     */
    private ?string $description = null;

    /**
     * @SerializedName("RestrictRefundAmountToCapturedAmount")
     */
    private ?bool $restrictRefundAmountToCapturedAmount = null;

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

    public function isRestrictRefundAmountToCapturedAmount(): ?bool
    {
        return $this->restrictRefundAmountToCapturedAmount;
    }

    public function setRestrictRefundAmountToCapturedAmount(?bool $restrictRefundAmountToCapturedAmount): self
    {
        $this->restrictRefundAmountToCapturedAmount = $restrictRefundAmountToCapturedAmount;

        return $this;
    }
}
