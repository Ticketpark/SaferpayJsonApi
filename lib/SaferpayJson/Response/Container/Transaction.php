<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Transaction
{
    const TYPE_PAYMENT = 'PAYMENT';

    const STATUS_AUTHORIZED = 'AUTHORIZED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_CAPTURED = 'CAPTURED';
    const STATUS_PENDING = 'PENDING';

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
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
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
     * @SerializedName("AcquirerReference")
     * @Type("string")
     */
    private $acquirerReference;

    /**
     * @var string|null
     * @SerializedName("SixTransactionReference")
     * @Type("string")
     */
    private $sixTransactionReference;

    /**
     * @var string|null
     * @SerializedName("ApprovalCode")
     * @Type("string")
     */
    private $approvalCode;

    /**
     * @var DirectDebit|null
     * @SerializedName("DirectDebit")
     * @Type("Ticketpark\SaferpayJson\Response\Container\DirectDebit")
     */
    private $directDebit;

    /**
     * @var Invoice|null
     * @SerializedName("Invoice")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Invoice")
     */
    private $invoice;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getAcquirerReference(): ?string
    {
        return $this->acquirerReference;
    }

    public function getAcquirerName(): ?string
    {
        return $this->acquirerName;
    }

    public function getSixTransactionReference(): ?string
    {
        return $this->sixTransactionReference;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function getDirectDebit(): ?DirectDebit
    {
        return $this->directDebit;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }
}
