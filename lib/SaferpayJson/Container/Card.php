<?php declare(strict_types=1);

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

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getMaskedNumber(): string
    {
        return $this->maskedNumber;
    }

    public function setMaskedNumber(string $maskedNumber): self
    {
        $this->maskedNumber = $maskedNumber;

        return $this;
    }

    public function getExpYear(): int
    {
        return $this->expYear;
    }

    public function setExpYear(int $expYear): self
    {
        $this->expYear = $expYear;

        return $this;
    }

    public function getExpMonth(): int
    {
        return $this->expMonth;
    }

    public function setExpMonth(int $expMonth): self
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getHashValue(): string
    {
        return $this->hashValue;
    }

    public function setHashValue(string $hashValue): self
    {
        $this->hashValue = $hashValue;

        return $this;
    }
}
