<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InstallmentPlan
{
    /**
     * @var int
     * @SerializedName("NumberOfInstallments")
     * @Type("int")
     */
    protected $numberOfInstallments;

    /**
     * @var string
     * @SerializedName("InterestRate")
     * @Type("string")
     */
    protected $interestRate;

    /**
     * @var Amount
     * @SerializedName("InstallmentFee")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $installmentFee;

    /**
     * @var string
     * @SerializedName("AnnualPercentageRate")
     * @Type("string")
     */
    protected $annualPercentageRate;

    /**
     * @var Amount
     * @SerializedName("FirstInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $firstInstallmentAmount;

    /**
     * @var Amount
     * @SerializedName("SubsequentInstallmentAmount")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $subsequentInstallmentAmount;

    /**
     * @var Amount
     * @SerializedName("TotalAmountDue")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $totalAmountDue;

    public function getNumberOfInstallments(): ?int
    {
        return $this->numberOfInstallments;
    }

    public function setNumberOfInstallments(int $numberOfInstallments): self
    {
        $this->numberOfInstallments = $numberOfInstallments;

        return $this;
    }

    public function getInterestRate(): ?string
    {
        return $this->interestRate;
    }

    public function setInterestRate(string $interestRate): self
    {
        $this->interestRate = $interestRate;

        return $this;
    }

    public function getInstallmentFee(): ?Amount
    {
        return $this->installmentFee;
    }

    public function setInstallmentFee(Amount $installmentFee): self
    {
        $this->installmentFee = $installmentFee;

        return $this;
    }

    public function getAnnualPercentageRate(): ?string
    {
        return $this->annualPercentageRate;
    }

    public function setAnnualPercentageRate(string $annualPercentageRate): self
    {
        $this->annualPercentageRate = $annualPercentageRate;

        return $this;
    }

    public function getFirstInstallmentAmount(): ?Amount
    {
        return $this->firstInstallmentAmount;
    }

    public function setFirstInstallmentAmount(Amount $firstInstallmentAmount): self
    {
        $this->firstInstallmentAmount = $firstInstallmentAmount;

        return $this;
    }

    public function getSubsequentInstallmentAmount(): ?Amount
    {
        return $this->subsequentInstallmentAmount;
    }

    public function setSubsequentInstallmentAmount(Amount $subsequentInstallmentAmount): self
    {
        $this->subsequentInstallmentAmount = $subsequentInstallmentAmount;

        return $this;
    }

    public function getTotalAmountDue(): ?Amount
    {
        return $this->totalAmountDue;
    }

    public function setTotalAmountDue(Amount $totalAmountDue): self
    {
        $this->totalAmountDue = $totalAmountDue;

        return $this;
    }
}
