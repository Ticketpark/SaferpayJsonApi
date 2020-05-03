<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Transaction
{
    /**
     * @var string|null
     * @SerializedName("Type")
     * @Type("string")
     */
    private $type;

    /**
     * @var string|null
     * @SerializedName("Status")
     * @Type("string")
     */
    private $status;

    /**
     * @var string|null
     * @SerializedName("Id")
     * @Type("string")
     */
    private $id;

    /**
     * @var string|null
     * @SerializedName("CaptureId")
     * @Type("string")
     */
    private $captureId;

    /**
     * @var string|null
     * @SerializedName("Date")
     * @Type("string")
     */
    private $date;

    /**
     * @var Amount|null
     * @SerializedName("Amount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    private $amount;

    /**
     * @var string|null
     * @SerializedName("OrderId")
     * @Type("string")
     */
    private $orderId;

    /**
     * @var string|null
     * @SerializedName("AcquirerName")
     * @Type("string")
     */
    private $acquirerName;

    /**
     * @var string|null
     * @SerializedName("SixTransactionReference")
     * @Type("string")
     */
    private $sixTransactionReference;

    /**
     * @var string|null
     * @SerializedName("AcquirerReference")
     * @Type("string")
     */
    private $acquirerReference;

    /**
     * @var string|null
     * @SerializedName("ApprovalCode")
     * @Type("string")
     */
    private $approvalCode;

    /**
     * @var DirectDebit|null
     * @SerializedName("DirectDebit")
     * @Type("Ticketpark\SaferpayJson\Container\DirectDebit")
     */
    private $directDebit;

    /**
     * @var Invoice|null
     * @SerializedName("Invoice")
     * @Type("Ticketpark\SaferpayJson\Container\Invoice")
     */
    private $invoice;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function setCaptureId(?string $captureId): self
    {
        $this->captureId = $captureId;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
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

    public function getAcquirerName(): ?string
    {
        return $this->acquirerName;
    }

    public function setAcquirerName(?string $acquirerName): self
    {
        $this->acquirerName = $acquirerName;

        return $this;
    }

    public function getAcquirerReference(): ?string
    {
        return $this->acquirerReference;
    }

    public function setAcquirerReference(?string $acquirerReference): self
    {
        $this->acquirerReference = $acquirerReference;

        return $this;
    }

    public function getSixTransactionReference(): ?string
    {
        return $this->sixTransactionReference;
    }

    public function setSixTransactionReference(?string $sixTransactionReference): self
    {
        $this->sixTransactionReference = $sixTransactionReference;

        return $this;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function setApprovalCode(?string $approvalCode): self
    {
        $this->approvalCode = $approvalCode;

        return $this;
    }

    public function getDirectDebit(): ?DirectDebit
    {
        return $this->directDebit;
    }

    public function setDirectDebit(?DirectDebit $directDebit): self
    {
        $this->directDebit = $directDebit;

        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }
}
