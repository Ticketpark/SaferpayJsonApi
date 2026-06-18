<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Brand
{
    #[SerializedName('PaymentMethod')]
    private ?string $paymentMethod = null;

    #[SerializedName('Name')]
    private ?string $name = null;

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
