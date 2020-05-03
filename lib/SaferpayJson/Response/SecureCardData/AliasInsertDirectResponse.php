<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Alias;
use Ticketpark\SaferpayJson\Container\CheckResult;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Response;

class AliasInsertDirectResponse extends Response
{
    /**
     * @var Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @var PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var CheckResult
     * @SerializedName("CheckResult")
     * @Type("Ticketpark\SaferpayJson\Container\CheckResult")
     */
    protected $checkResult;

    public function getAlias(): Alias
    {
        return $this->alias;
    }

    public function setAlias(Alias $alias): void
    {
        $this->alias = $alias;
    }

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): void
    {
        $this->paymentMeans = $paymentMeans;
    }
}
