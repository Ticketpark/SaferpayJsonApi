<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class ChosenPlan
{
    /**
     * @var int|null
     * @SerializedName("NumberOfInstallments")
     * @Type("int")
     */
    private $numberOfInstallments;

    /**
     * @var string|null
     * @SerializedName("InterestRate")
     * @Type("string")
     */
    private $interestRate;

    /**
     * @var Amount|null
     * @SerializedName("InstallmentFee")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $installmentFee;

    /**
     * @var string|null
     * @SerializedName("AnnualPercentageRate")
     * @Type("string")
     */
    private $annualPercentageRate;

    /**
     * @var Amount|null
     * @SerializedName("FirstInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $firstInstallmentAmount;

    /**
     * @var Amount|null
     * @SerializedName("SubsequentInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $subsequentInstallmentAmount;

    /**
     * @var Amount|null
     * @SerializedName("TotalAmountDue")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $totalAmountDue;

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
