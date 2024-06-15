<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Dcc
{
    /**
     * @SerializedName("PayerAmount")
     */
    private ?Amount $payerAmount = null;

    /**
     * @SerializedName("Markup")
     */
    private ?string $markup = null;

    /**
     * @SerializedName("ExchangeRate")
     */
    private ?string $exchangeRate = null;

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
