<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class CustomPlan
{
    /**
     * @var int|null
     * @SerializedName("MinimumNumberOfInstallments")
     * @Type("int")
     */
    private $minimumNumberOfInstallments;

    /**
     * @var int|null
     * @SerializedName("MaximumNumberOfInstallments")
     * @Type("int")
     */
    private $maximumNumberOfInstallments;

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
     * @SerializedName("TotalAmountDue")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $totalAmountDue;

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
