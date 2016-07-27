<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Payee;

class Invoice
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Payee
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

    /**
     * @return Ticketpark\SaferpayJson\Container\Payee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Payee $payee
     * @return Invoice
     */
    public function setPayee(Payee $payee)
    {
        $this->payee = $payee;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonForTransfer()
    {
        return $this->reasonForTransfer;
    }

    /**
     * @param string $reasonForTransfer
     * @return Invoice
     */
    public function setReasonForTransfer($reasonForTransfer)
    {
        $this->reasonForTransfer = $reasonForTransfer;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return Invoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}