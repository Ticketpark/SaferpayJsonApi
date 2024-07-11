<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class IssuerReference
{
    /**
     * @SerializedName("TransactionStamp")
     */
    private ?string $transactionStamp = null;

    /**
     * @SerializedName("SettlementDate")
     */
    private ?string $settlementDate = null;

    public function getTransactionStamp(): ?string
    {
        return $this->transactionStamp;
    }

    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
}
