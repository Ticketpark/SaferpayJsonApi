<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class MastercardIssuerInstallments
{
    /**
     * @var array<InstallmentPlans>
     * @SerializedName("InstallmentPlans")
     * @Type("array")
     */
    protected $installmentPlans;

    /**
     * @var CustomPlan
     * @SerializedName("CustomPlan")
     * @Type("Ticketpark\SaferpayJson\Container\CustomPlan")
     */
    protected $customPlan;

    /**
     * @var string
     * @SerializedName("ReceiptFreeText")
     * @Type("string")
     */
    protected $receiptFreeText;

    public function getInstallmentPlans(): ?array
    {
        return $this->installmentPlans;
    }

    public function setInstallmentPlans(array $installmentPlans): self
    {
        $this->installmentPlans = $installmentPlans;

        return $this;
    }

    public function getCustomPlan(): ?CustomPlan
    {
        return $this->customPlan;
    }

    public function setCustomPlan(CustomPlan $customPlan): self
    {
        $this->customPlan = $customPlan;

        return $this;
    }

    public function getReceiptFreeText(): ?string
    {
        return $this->receiptFreeText;
    }

    public function setReceiptFreeText(string $receiptFreeText): self
    {
        $this->receiptFreeText = $receiptFreeText;

        return $this;
    }
}
