<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class ChosenPlan
{
    /**
     * @var int
     * @SerializedName("NumberOfInstallments")
     * @Type("int")
     */
    private $numberOfInstallments;

    /**
     * @var string|null
     * @SerializedName("InterestRate")
     */
    private $interestRate;

    /**
     * @var Amount|null
     * @SerializedName("InstallmentFee")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Amount")
     */
    private $installmentFee;

    /**
     * @var string|null
     * @SerializedName("AnnualPercentageRate")
     */
    private $annualPercentageRate;

    /**
     * @var Amount|null
     * @SerializedName("FirstInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Amount")
     */
    private $firstInstallmentAmount;

    /**
     * @var Amount|null
     * @SerializedName("SubsequentInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Amount")
     */
    private $subsequentInstallmentAmount;

    /**
     * @var Amount|null
     * @SerializedName("TotalAmountDue")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Amount")
     */
    private $totalAmountDue;

    public function __construct(int $numberOfInstallments)
    {
        $this->numberOfInstallments = $numberOfInstallments;
    }

    public function getNumberOfInstallments(): int
    {
        return $this->numberOfInstallments;
    }

    public function getInterestRate(): ?string
    {
        return $this->interestRate;
    }

    public function setInterestRate(?string $interestRate): self
    {
        $this->interestRate = $interestRate;

        return $this;
    }

    public function getInstallmentFee(): ?Amount
    {
        return $this->installmentFee;
    }

    public function setInstallmentFee(?Amount $installmentFee): self
    {
        $this->installmentFee = $installmentFee;

        return $this;
    }

    public function getAnnualPercentageRate(): ?string
    {
        return $this->annualPercentageRate;
    }

    public function setAnnualPercentageRate(?string $annualPercentageRate): self
    {
        $this->annualPercentageRate = $annualPercentageRate;

        return $this;
    }

    public function getFirstInstallmentAmount(): ?Amount
    {
        return $this->firstInstallmentAmount;
    }

    public function setFirstInstallmentAmount(?Amount $firstInstallmentAmount): self
    {
        $this->firstInstallmentAmount = $firstInstallmentAmount;

        return $this;
    }

    public function getSubsequentInstallmentAmount(): ?Amount
    {
        return $this->subsequentInstallmentAmount;
    }

    public function setSubsequentInstallmentAmount(?Amount $subsequentInstallmentAmount): self
    {
        $this->subsequentInstallmentAmount = $subsequentInstallmentAmount;

        return $this;
    }

    public function getTotalAmountDue(): ?Amount
    {
        return $this->totalAmountDue;
    }

    public function setTotalAmountDue(?Amount $totalAmountDue): self
    {
        $this->totalAmountDue = $totalAmountDue;

        return $this;
    }
}
