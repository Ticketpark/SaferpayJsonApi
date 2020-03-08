<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payee;

class Invoice
{
    /**
     * @var Payee
     * @SerializedName("Payee")
     * @Type("Ticketpark\SaferpayJson\Container\Payee")
     */
    protected $payee;

    /**
     * @var string
     * @SerializedName("ReasonForTransfer")
     * @Type("string")
     */
    protected $reasonForTransfer;

    /**
     * @var string
     * @SerializedName("DueDate")
     * @Type("string")
     */
    protected $dueDate;

    public function getPayee(): Payee
    {
        return $this->payee;
    }

    public function setPayee(Payee $payee): self
    {
        $this->payee = $payee;

        return $this;
    }

    public function getReasonForTransfer(): string
    {
        return $this->reasonForTransfer;
    }

    public function setReasonForTransfer(string $reasonForTransfer): self
    {
        $this->reasonForTransfer = $reasonForTransfer;

        return $this;
    }

    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function setDueDate(string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}
