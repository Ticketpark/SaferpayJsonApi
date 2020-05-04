<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Marketplace
{
    /**
     * @var string
     * @SerializedName("SubmerchantId")
     */
    private $submerchantId;

    /**
     * @var Amount|null
     * @SerializedName("Fee")
     */
    private $fee;

    /**
     * @var Amount|null
     * @SerializedName("FeeRefund")
     */
    private $feeRefund;

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
}
