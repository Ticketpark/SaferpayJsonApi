<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Amount
{
    /**
     * @SerializedName("Value")
     * @Type("integer")
     */
    private int $value;

    /**
     * @SerializedName("CurrencyCode")
     */
    private string $currencyCode;

    public function __construct(int $value, string $currencyCode)
    {
        $this->value = $value;
        $this->currencyCode = $currencyCode;
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
