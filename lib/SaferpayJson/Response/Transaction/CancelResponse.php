<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Response;

final class CancelResponse extends Response
{
    /**
     * @SerializedName("TransactionId")
     */
    private ?string $transactionId = null;

    /**
     * @SerializedName("OrderId")
     */
    private ?string $orderId = null;

    /**
     * @SerializedName("Date")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $date = null;

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }
}
