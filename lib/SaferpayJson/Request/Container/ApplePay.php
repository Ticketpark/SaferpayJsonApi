<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class ApplePay
{
    public function __construct(
        #[SerializedName('PaymentToken')]
        private string $paymentToken,
    ) {
    }

    public function getPaymentToken(): string
    {
        return $this->paymentToken;
    }
}
