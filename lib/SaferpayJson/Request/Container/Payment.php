<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Payment
{
    /**
     * @SerializedName("Amount")
     */
    private Amount $amount;

    /**
     * @SerializedName("OrderId")
     */
    private ?string $orderId = null;

    /**
     * @SerializedName("PayerNote")
     */
    private ?string $payerNote = null;

    /**
     * @SerializedName("Description")
     */
    private ?string $description = null;

    /**
     * @SerializedName("MandateId")
     */
    private ?string $mandateId = null;

    /**
     * @SerializedName("Options")
     */
    private ?Options $options = null;

    /**
     * @SerializedName("Recurring")
     */
    private ?Recurring $recurring = null;

    /**
     * @SerializedName("Installment")
     */
    private ?Installment $installment = null;

    public function __construct(Amount $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): Amount
    {
        return $this->amount;
    }

    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;

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

    public function getPayerNote(): ?string
    {
        return $this->payerNote;
    }

    public function setPayerNote(string $payerNote): self
    {
        $this->payerNote = $payerNote;

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

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function setMandateId(string $mandateId): self
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    public function getOptions(): ?Options
    {
        return $this->options;
    }

    public function setOptions(Options $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getRecurring(): ?Recurring
    {
        return $this->recurring;
    }

    public function setRecurring(Recurring $recurring): self
    {
        $this->recurring = $recurring;

        return $this;
    }

    public function getInstallment(): ?Installment
    {
        return $this->installment;
    }

    public function setInstallment(Installment $installment): self
    {
        $this->installment = $installment;

        return $this;
    }
}
