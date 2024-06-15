<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Container\Alias;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Response;

final class AliasUpdateResponse extends Response
{
    /**
     * @SerializedName("Alias")
     */
    private ?Alias $alias = null;

    /**
     * @SerializedName("PaymentMeans")
     */
    private ?PaymentMeans $paymentMeans = null;

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }
}
