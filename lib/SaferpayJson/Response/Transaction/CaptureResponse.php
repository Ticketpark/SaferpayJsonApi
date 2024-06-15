<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Invoice;
use Ticketpark\SaferpayJson\Response\Response;

final class CaptureResponse extends Response
{
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_CAPTURED = 'CAPTURED';

    /**
     * @SerializedName("TransactionId")
     */
    private ?string $transactionId = null;

    /**
     * @SerializedName("CaptureId")
     */
    private ?string $captureId = null;

    /**
     * @SerializedName("Status")
     */
    private ?string $status = null;

    /**
     * @SerializedName("Date")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $date = null;

    /**
     * @SerializedName("Invoice")
     */
    private ?Invoice $invoice = null;

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }
}
