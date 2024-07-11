<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class InstallmentPlan
{
    /**
     * @SerializedName("NumberOfInstallments")
     */
    private ?int $numberOfInstallments = null;

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
     * @SerializedName("FirstInstallmentAmount")
     */
    private ?Amount $firstInstallmentAmount = null;

    /**
     * @SerializedName("SubsequentInstallmentAmount")
     */
    private ?Amount $subsequentInstallmentAmount = null;

    /**
     * @SerializedName("TotalAmountDue")
     */
    private ?Amount $totalAmountDue = null;

    public function getNumberOfInstallments(): ?int
    {
        return $this->numberOfInstallments;
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

    public function getFirstInstallmentAmount(): ?Amount
    {
        return $this->firstInstallmentAmount;
    }

    public function getSubsequentInstallmentAmount(): ?Amount
    {
        return $this->subsequentInstallmentAmount;
    }

    public function getTotalAmountDue(): ?Amount
    {
        return $this->totalAmountDue;
    }
}
