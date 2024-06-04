<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Dcc
{
    /**
     * @var Amount|null
     * @SerializedName("PayerAmount")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $payerAmount;

    /**
     * @var string|null
     * @SerializedName("Markup")
     * @Type("string")
     */
    private $markup;

    /**
     * @var string|null
     * @SerializedName("ExchangeRate")
     * @Type("string")
     */
    private $exchangeRate;

    public function getPayerAmount(): ?Amount
    {
        return $this->payerAmount;
    }

    public function getMarkup(): ?string
    {
        return $this->markup;
    }

    public function getExchangeRate(): ?string
    {
        return $this->exchangeRate;
    }
}
