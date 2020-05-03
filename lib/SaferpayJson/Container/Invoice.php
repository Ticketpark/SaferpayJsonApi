<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payee;

final class Invoice
{
    /**
     * @var Payee|null
     * @SerializedName("Payee")
     * @Type("Ticketpark\SaferpayJson\Container\Payee")
     */
    private $payee;

    /**
     * @var string|null
     * @SerializedName("ReasonForTransfer")
     * @Type("string")
     */
    private $reasonForTransfer;

    /**
     * @var string|null
     * @SerializedName("DueDate")
     * @Type("string")
     */
    private $dueDate;

    public function getPayee(): ?Payee
    {
        return $this->payee;
    }

    public function setPayee(?Payee $payee): self
    {
        $this->payee = $payee;

        return $this;
    }

    public function getReasonForTransfer(): ?string
    {
        return $this->reasonForTransfer;
    }

    public function setReasonForTransfer(?string $reasonForTransfer): self
    {
        $this->reasonForTransfer = $reasonForTransfer;

        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}
