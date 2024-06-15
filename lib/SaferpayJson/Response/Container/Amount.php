<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Amount
{
    /**
     * @SerializedName("Value")
     */
    private ?int $value = null;

    /**
     * @SerializedName("CurrencyCode")
     */
    private ?string $currencyCode = null;

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
}
