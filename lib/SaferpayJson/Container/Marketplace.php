<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Marketplace
{
    /**
     * @var string
     * @SerializedName("SubmerchantId")
     */
    protected $submerchantId;

    /**
     * @var Amount
     * @SerializedName("Fee")
     */
    protected $fee;

    /**
     * @var Amount
     * @SerializedName("FeeRefund")
     */
    protected $feeRefund;

    public function getSubmerchantId(): ?string
    {
        return $this->submerchantId;
    }

    public function setSubmerchantId(string $submerchantId): self
    {
        $this->submerchantId = $submerchantId;

        return $this;
    }

    public function getFee(): ?Amount
    {
        return $this->fee;
    }

    public function setFee(Amount $fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    public function getFeeRefund(): ?Amount
    {
        return $this->feeRefund;
    }

    public function setFeeRefund(Amount $feeRefund): self
    {
        $this->feeRefund = $feeRefund;

        return $this;
    }
}
