<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class IssuerReference
{
    /**
     * @var string|null
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

    public function getTransactionStamp(): ?string
    {
        return $this->transactionStamp;
    }

    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
}
