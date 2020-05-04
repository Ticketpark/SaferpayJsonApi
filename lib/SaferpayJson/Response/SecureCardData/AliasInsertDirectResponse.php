<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Alias;
use Ticketpark\SaferpayJson\Response\Container\CheckResult;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Response;

final class AliasInsertDirectResponse extends Response
{
    /**
     * @var Alias|null
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Alias")
     */
    private $alias;

    /**
     * @var PaymentMeans|null
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Response\Container\PaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var CheckResult|null
     * @SerializedName("CheckResult")
     * @Type("Ticketpark\SaferpayJson\Response\Container\CheckResult")
     */
    private $checkResult;

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getCheckResult(): ?CheckResult
    {
        return $this->checkResult;
    }
}
