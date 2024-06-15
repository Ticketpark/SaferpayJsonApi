<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Container\Alias;
use Ticketpark\SaferpayJson\Response\Container\CheckResult;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Response;

final class AliasAssertInsertResponse extends Response
{
    /**
     * @SerializedName("Alias")
     */
    private ?Alias $alias = null;

    /**
     * @SerializedName("PaymentMeans")
     */
    private ?PaymentMeans $paymentMeans = null;

    /**
     * @SerializedName("CheckResult")
     */
    private ?CheckResult $checkResult = null;

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
