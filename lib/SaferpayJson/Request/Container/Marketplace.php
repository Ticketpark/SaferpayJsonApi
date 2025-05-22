<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Marketplace
{
    /**
     * @SerializedName("SubmerchantId")
     */
    private string $submerchantId;

    /**
     * @SerializedName("Fee")
     */
    private ?Amount $fee = null;

    /**
     * @SerializedName("FeeRefund")
     */
    private ?Amount $feeRefund = null;

    /**
     * @SerializedName("ForeignRetailer")
     */
    private ?ForeignRetailer $foreignRetailer = null;

    public function __construct(string $submerchantId)
    {
        $this->submerchantId = $submerchantId;
    }

    public function getSubmerchantId(): string
    {
        return $this->submerchantId;
    }

    public function getFee(): ?Amount
    {
        return $this->fee;
    }

    public function setFee(?Amount $fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    public function getFeeRefund(): ?Amount
    {
        return $this->feeRefund;
    }

    public function setFeeRefund(?Amount $feeRefund): self
    {
        $this->feeRefund = $feeRefund;

        return $this;
    }

    public function getForeignRetailer(): ?ForeignRetailer
    {
        return $this->foreignRetailer;
    }

    public function setForeignRetailer(?ForeignRetailer $foreignRetailer): self
    {
        $this->foreignRetailer = $foreignRetailer;

        return $this;
    }
}
