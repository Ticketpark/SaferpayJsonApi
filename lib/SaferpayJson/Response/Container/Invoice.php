<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Payee;

final class Invoice
{
    /**
     * @var Payee|null
     * @SerializedName("Payee")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Payee")
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

    public function getReasonForTransfer(): ?string
    {
        return $this->reasonForTransfer;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
}
