<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Card
{
    /**
     * @SerializedName("Number")
     */
    private ?string $number = null;

    /**
     * @SerializedName("ExpYear")
     * @Type("integer")
     */
    private ?int $expYear = null;

    /**
     * @SerializedName("ExpMonth")
     * @Type("integer")
     */
    private ?int $expMonth = null;

    /**
     * @SerializedName("HolderName")
     */
    private ?string $holderName = null;

    /**
     * @SerializedName("CountryCode")
     */
    private ?string $countryCode = null;

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

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
}
