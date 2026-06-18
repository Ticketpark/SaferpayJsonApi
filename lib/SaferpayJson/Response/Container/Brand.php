<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Enum\PaymentMethod;

final class Brand
{
    #[SerializedName('PaymentMethod')]
    private ?PaymentMethod $paymentMethod = null;

    #[SerializedName('Name')]
    private ?string $name = null;

    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
