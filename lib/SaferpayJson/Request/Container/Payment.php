<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Payment
{
    /**
     * @var Amount
     * @SerializedName("Amount")
     */
    private $amount;

    /**
     * @var string|null
     * @SerializedName("OrderId")
     */
    private $orderId;

    /**
     * @var string|null
     * @SerializedName("PayerNote")
     */
    private $payerNote;

    /**
     * @var string|null
     * @SerializedName("Description")
     */
    private $description;

    /**
     * @var string|null
     * @SerializedName("MandateId")
     */
    private $mandateId;

    /**
     * @var Options|null
     * @SerializedName("Options")
     */
    private $options;

    /**
     * @var Recurring|null
     * @SerializedName("Recurring")
     */
    private $recurring;

    /**
     * @var Installment|null
     * @SerializedName("Installment")
     */
    private $installment;

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
