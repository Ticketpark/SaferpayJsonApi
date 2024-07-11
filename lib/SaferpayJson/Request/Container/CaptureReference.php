<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class CaptureReference
{
    /**
     * @SerializedName("CaptureId")
     */
    private ?string $captureId = null;

    /**
     * @SerializedName("TransactionId")
     */
    private ?string $transactionId = null;

    /**
     * @SerializedName("OrderId")
     */
    private ?string $orderId = null;

    /**
     * @SerializedName("OrderPartId")
     */
    private ?string $orderPartId = null;

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function setCaptureId(?string $captureId): self
    {
        $this->captureId = $captureId;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

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

    public function getOrderPartId(): ?string
    {
        return $this->orderPartId;
    }

    public function setOrderPartId(?string $orderPartId): self
    {
        $this->orderPartId = $orderPartId;

        return $this;
    }
}
