<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class IssuerReference
{
    /**
     * @SerializedName("TransactionStamp")
     */
    private string $transactionStamp;

    /**
     * @SerializedName("SettlementDate")
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
