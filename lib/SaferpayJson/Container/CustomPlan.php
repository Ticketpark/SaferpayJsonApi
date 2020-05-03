<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CustomPlan
{
    /**
     * @var int
     * @SerializedName("MinimumNumberOfInstallments")
     * @Type("int")
     */
    protected $minimumNumberOfInstallments;

    /**
     * @var int
     * @SerializedName("MaximumNumberOfInstallments")
     * @Type("int")
     */
    protected $maximumNumberOfInstallments;

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
     * @SerializedName("TotalAmountDue")
     * @Type("Ticketpark\SaferpayJson\Container\Amount")
     */
    protected $totalAmountDue;

    public function getMinimumNumberOfInstallments(): ?int
    {
        return $this->minimumNumberOfInstallments;
    }

    public function setMinimumNumberOfInstallments(int $minimumNumberOfInstallments): self
    {
        $this->minimumNumberOfInstallments = $minimumNumberOfInstallments;

        return $this;
    }

    public function getMaximumNumberOfInstallments(): ?int
    {
        return $this->maximumNumberOfInstallments;
    }

    public function setMaximumNumberOfInstallments(int $maximumNumberOfInstallments): self
    {
        $this->maximumNumberOfInstallments = $maximumNumberOfInstallments;

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
