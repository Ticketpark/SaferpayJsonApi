<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class CaptureReference
{
    /**
     * @var string
     * @SerializedName("CaptureId")
     */
    protected $captureId;

    /**
     * @var string
     * @SerializedName("TransactionId")
     */
    protected $transactionId;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("OrderPartId")
     */
    protected $orderPartId;

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function setCaptureId(string $captureId): self
    {
        $this->captureId = $captureId;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderPartId(): ?string
    {
        return $this->orderPartId;
    }

    public function setOrderPartId(string $orderPartId): self
    {
        $this->orderPartId = $orderPartId;

        return $this;
    }
}
