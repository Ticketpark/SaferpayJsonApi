<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Card
{
    /**
     * @var string
     * @SerializedName("Number")
     * @Type("string")
     */
    protected $number;

    /**
     * @var string
     * @SerializedName("MaskedNumber")
     * @Type("string")
     */
    protected $maskedNumber;

    /**
     * @var int
     * @SerializedName("ExpYear")
     * @Type("integer")
     */
    protected $expYear;

    /**
     * @var int
     * @SerializedName("ExpMonth")
     * @Type("integer")
     */
    protected $expMonth;

    /**
     * @var string
     * @SerializedName("HolderName")
     * @Type("string")
     */
    protected $holderName;

    /**
     * @var string
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    protected $countryCode;

    /**
     * @var string
     * @SerializedName("HashValue")
     * @Type("string")
     */
    protected $hashValue;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedNumber()
    {
        return $this->maskedNumber;
    }

    /**
     * @param string $maskedNumber
     * @return Card
     */
    public function setMaskedNumber($maskedNumber)
    {
        $this->maskedNumber = $maskedNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * @param int $expYear
     * @return Card
     */
    public function setExpYear($expYear)
    {
        $this->expYear = $expYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * @param int $expMonth
     * @return Card
     */
    public function setExpMonth($expMonth)
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * @param string $holderName
     * @return Card
     */
    public function setHolderName($holderName)
    {
        $this->holderName = $holderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Card
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHashValue()
    {
        return $this->hashValue;
    }

    /**
     * @param string $hashValue
     * @return Card
     */
    public function setHashValue($hashValue)
    {
        $this->hashValue = $hashValue;

        return $this;
    }
}