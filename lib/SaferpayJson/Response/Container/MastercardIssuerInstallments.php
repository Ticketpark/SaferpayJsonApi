<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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
     * @Type("Ticketpark\SaferpayJson\Response\Container\CustomPlan")
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

    public function getCustomPlan(): ?CustomPlan
    {
        return $this->customPlan;
    }

    public function getReceiptFreeText(): ?string
    {
        return $this->receiptFreeText;
    }

    public function getChosenPlan(): ?ChosenPlan
    {
        return $this->chosenPlan;
    }
}
