<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Amount
{
    /**
     * @var int
     * @SerializedName("Value")
     * @Type("integer")
     */
    protected $value;

    /**
     * @var string
     * @SerializedName("CurrencyCode")
     * @Type("string")
     */
    protected $currencyCode;

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}
