<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Card
{
    /**
     * @var string|null
     * @SerializedName("Number")
     * @Type("string")
     */
    private $number;

    /**
     * @var string|null
     * @SerializedName("MaskedNumber")
     * @Type("string")
     */
    private $maskedNumber;

    /**
     * @var int|null
     * @SerializedName("ExpYear")
     * @Type("integer")
     */
    private $expYear;

    /**
     * @var int|null
     * @SerializedName("ExpMonth")
     * @Type("integer")
     */
    private $expMonth;

    /**
     * @var string|null
     * @SerializedName("HolderName")
     * @Type("string")
     */
    private $holderName;

    /**
     * @var string|null
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    private $countryCode;

    /**
     * @var string|null
     * @SerializedName("HashValue")
     * @Type("string")
     */
    private $hashValue;

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getMaskedNumber(): ?string
    {
        return $this->maskedNumber;
    }

    public function setMaskedNumber(?string $maskedNumber): self
    {
        $this->maskedNumber = $maskedNumber;

        return $this;
    }

    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    public function setExpYear(?int $expYear): self
    {
        $this->expYear = $expYear;

        return $this;
    }

    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    public function setExpMonth(?int $expMonth): self
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function setHolderName(?string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getHashValue(): ?string
    {
        return $this->hashValue;
    }

    public function setHashValue(?string $hashValue): self
    {
        $this->hashValue = $hashValue;

        return $this;
    }
}
