<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class GooglePay
{
    /**
     * @SerializedName("PaymentToken")
     */
    private string $paymentToken;

    public function __construct(string $paymentToken)
    {
        $this->paymentToken = $paymentToken;
    }

    public function getPaymentToken(): string
    {
        return $this->paymentToken;
    }
}
