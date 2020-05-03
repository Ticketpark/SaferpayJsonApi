<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Invoice;
use Ticketpark\SaferpayJson\Response\Response;

final class CaptureResponse extends Response
{
    const STATUS_PENDING = 'PENDING';
    const STATUS_CAPTURED = 'CAPTURED';

    /**
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    private $transactionId;

    /**
     * @var string
     * @SerializedName("CaptureId")
     * @Type("string")
     */
    private $captureId;

    /**
     * @var string
     * @SerializedName("Statis")
     * @Type("string")
     */
    private $status;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    private $date;

    /**
     * @var Invoice
     * @SerializedName("Invoice")
     * @Type("Ticketpark\SaferpayJson\Container\Invoice")
     */
    private $invoice;

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }
}
