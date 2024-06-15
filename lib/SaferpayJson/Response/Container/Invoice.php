<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Invoice
{
    /**
     * @SerializedName("Payee")
     */
    private ?Payee $payee = null;

    /**
     * @SerializedName("ReasonForTransfer")
     */
    private ?string $reasonForTransfer = null;

    /**
     * @SerializedName("DueDate")
     * @Type("DateTime<'Y-m-d'>")
     */
    private ?\DateTime $dueDate = null;

    public function getPayee(): ?Payee
    {
        return $this->payee;
    }

    public function getReasonForTransfer(): ?string
    {
        return $this->reasonForTransfer;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }
}
