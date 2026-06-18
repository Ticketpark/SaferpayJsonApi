<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Amount
{
    public function __construct(
        #[SerializedName('Value')]
        private int $value,
        #[SerializedName('CurrencyCode')]
        private string $currencyCode,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
