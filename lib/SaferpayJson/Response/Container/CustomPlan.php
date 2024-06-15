<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class CustomPlan
{
    /**
     * @SerializedName("MinimumNumberOfInstallments")
     */
    private ?int $minimumNumberOfInstallments = null;

    /**
     * @SerializedName("MaximumNumberOfInstallments")
     */
    private ?int $maximumNumberOfInstallments = null;

    /**
     * @SerializedName("InterestRate")
     */
    private ?string $interestRate = null;

    /**
     * @SerializedName("InstallmentFee")
     */
    private ?Amount $installmentFee = null;

    /**
     * @SerializedName("AnnualPercentageRate")
     */
    private ?string $annualPercentageRate = null;

    /**
     * @SerializedName("TotalAmountDue")
     */
    private ?Amount $totalAmountDue = null;

    public function getMinimumNumberOfInstallments(): ?int
    {
        return $this->minimumNumberOfInstallments;
    }

    public function getMaximumNumberOfInstallments(): ?int
    {
        return $this->maximumNumberOfInstallments;
    }

    public function getInterestRate(): ?string
    {
        return $this->interestRate;
    }

    public function getInstallmentFee(): ?Amount
    {
        return $this->installmentFee;
    }

    public function getAnnualPercentageRate(): ?string
    {
        return $this->annualPercentageRate;
    }

    public function getTotalAmountDue(): ?Amount
    {
        return $this->totalAmountDue;
    }
}
