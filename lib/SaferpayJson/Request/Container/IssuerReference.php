<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class IssuerReference
{
    /**
     * @var string
     * @SerializedName("TransactionStamp")
     * @Type("string")
     */
    private $transactionStamp;

    /**
     * @var string|null
     * @SerializedName("SettlementDate")
     * @Type("string")
     */
    private $settlementDate;

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
