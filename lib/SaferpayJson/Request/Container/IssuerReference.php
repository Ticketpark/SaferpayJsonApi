<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class IssuerReference
{
    /**
     * @SerializedName("TransactionStamp")
     * @Type("string")
     */
    private string $transactionStamp;

    /**
     * @SerializedName("SettlementDate")
     * @Type("string")
     */
    private ?string $settlementDate = null;

    public function __construct(string $transactionStamp)
    {
        $this->transactionStamp = $transactionStamp;
    }

    public function getTransactionStamp(): string
    {
        return $this->transactionStamp;
    }

    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }

    public function setSettlementDate(?string $settlementDate): self
    {
        $this->settlementDate = $settlementDate;

        return $this;
    }
}
