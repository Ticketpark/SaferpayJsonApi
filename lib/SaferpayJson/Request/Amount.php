<?php

namespace Ticketpark\SaferpayJson\Request;

use JMS\Serializer\Annotation\SerializedName;

class Amount
{
    /**
     * @var int
     * @SerializedName("Value")
     */
    protected $value;

    /**
     * @var string
     * @SerializedName("CurrencyCode")
     */
    protected $currencyCode;

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return Amount
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currency
     * @return Amount
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}