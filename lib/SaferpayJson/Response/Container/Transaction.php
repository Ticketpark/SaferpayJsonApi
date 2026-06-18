<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;
use Ticketpark\SaferpayJson\Response\Enum\TransactionType;

final class Transaction
{
    #[SerializedName('Type')]
    private ?TransactionType $type = null;

    #[SerializedName('Status')]
    private ?TransactionStatus $status = null;

    #[SerializedName('Id')]
    private ?string $id = null;

    #[SerializedName('CaptureId')]
    private ?string $captureId = null;

    #[SerializedName('Date')]
    #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")]
    private ?\DateTimeImmutable $date = null;

    #[SerializedName('Amount')]
    private ?Amount $amount = null;

    #[SerializedName('OrderId')]
    private ?string $orderId = null;

    #[SerializedName('AcquirerName')]
    private ?string $acquirerName = null;

    #[SerializedName('AcquirerReference')]
    private ?string $acquirerReference = null;

    #[SerializedName('SixTransactionReference')]
    private ?string $sixTransactionReference = null;

    #[SerializedName('ApprovalCode')]
    private ?string $approvalCode = null;

    #[SerializedName('DirectDebit')]
    private ?DirectDebit $directDebit = null;

    #[SerializedName('Invoice')]
    private ?Invoice $invoice = null;

    #[SerializedName('IssuerReference')]
    private ?IssuerReference $issuerReference = null;

    public function getType(): ?TransactionType
    {
        return $this->type;
    }

    public function getStatus(): ?TransactionStatus
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

    public function getDate(): ?\DateTimeImmutable
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

    public function getIssuerReference(): ?IssuerReference
    {
        return $this->issuerReference;
    }
}
