<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Payment
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Description")
     */
    protected $description;

    /**
     * @var string
     * @SerializedName("PayerNote")
     */
    protected $payerNote;

    /**
     * @var Recurring
     * @SerializedName("Recurring")
     */
    protected $recurring;

    public function getAmount(): Amount
    {
        return $this->amount;
    }

    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPayerNote(): string
    {
        return $this->payerNote;
    }

    public function setPayerNote(string $payerNote): self
    {
        $this->payerNote = $payerNote;

        return $this;
    }

    public function getRecurring(): Recurring
    {
        return $this->recurring;
    }

    public function setRecurring(Recurring $recurring): self
    {
        $this->recurring = $recurring;

        return $this;
    }
}
