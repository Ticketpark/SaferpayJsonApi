<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

final class MastercardIssuerInstallments
{
    /**
     * @var array<InstallmentPlan>|null
     * @SerializedName("InstallmentPlans")
     * @Type("array")
     */
    private ?array $installmentPlans = null;

    /**
     * @SerializedName("CustomPlan")
     */
    private ?CustomPlan $customPlan = null;

    /**
     * @SerializedName("ReceiptFreeText")
     */
    private ?string $receiptFreeText = null;

    /**
     * @SerializedName("ChosenPlan")
     */
    private ?ChosenPlan $chosenPlan = null;

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
