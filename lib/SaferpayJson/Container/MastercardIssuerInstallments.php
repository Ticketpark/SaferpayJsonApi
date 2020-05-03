<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class MastercardIssuerInstallments
{
    /**
     * @var array<InstallmentPlan>|null
     * @SerializedName("InstallmentPlans")
     * @Type("array")
     */
    private $installmentPlans;

    /**
     * @var CustomPlan|null
     * @SerializedName("CustomPlan")
     * @Type("Ticketpark\SaferpayJson\Container\CustomPlan")
     */
    private $customPlan;

    /**
     * @var string|null
     * @SerializedName("ReceiptFreeText")
     * @Type("string")
     */
    private $receiptFreeText;

    /**
     * @var ChosenPlan|null
     * @SerializedName("ChosenPlan")
     * @Type("array")
     */
    private $chosenPlan;

    public function getInstallmentPlans(): ?array
    {
        return $this->installmentPlans;
    }

    public function setInstallmentPlans(?array $installmentPlans): self
    {
        $this->installmentPlans = $installmentPlans;

        return $this;
    }

    public function getCustomPlan(): ?CustomPlan
    {
        return $this->customPlan;
    }

    public function setCustomPlan(?CustomPlan $customPlan): self
    {
        $this->customPlan = $customPlan;

        return $this;
    }

    public function getReceiptFreeText(): ?string
    {
        return $this->receiptFreeText;
    }

    public function setReceiptFreeText(?string $receiptFreeText): self
    {
        $this->receiptFreeText = $receiptFreeText;

        return $this;
    }

    public function getChosenPlan(): ?ChosenPlan
    {
        return $this->chosenPlan;
    }

    public function setChosenPlan(?ChosenPlan $chosenPlan): self
    {
        $this->chosenPlan = $chosenPlan;

        return $this;
    }
}
