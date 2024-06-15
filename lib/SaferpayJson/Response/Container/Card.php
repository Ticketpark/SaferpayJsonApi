<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Card
{
    public const HOLDER_SEGMENT_UNSPECIFIED = 'UNSPECIFIED';
    public const HOLDER_SEGMENT_CONSUMER = 'CONSUMER';
    public const HOLDER_SEGMENT_CORPORATE = 'CORPORATE';
    public const HOLDER_SEGMENT_CORPORATE_AND_CONSUMER = 'CORPORATE_AND_CONSUMER';

    /**
     * @SerializedName("MaskedNumber")
     */
    private ?string $maskedNumber = null;

    /**
     * @SerializedName("ExpYear")
     */
    private ?int $expYear = null;

    /**
     * @SerializedName("ExpMonth")
     */
    private ?int $expMonth = null;

    /**
     * @SerializedName("HolderName")
     */
    private ?string $holderName = null;

    /**
     * @SerializedName("HolderSegment")
     */
    private ?string $holderSegment = null;

    /**
     * @SerializedName("CountryCode")
     */
    private ?string $countryCode = null;

    /**
     * @SerializedName("HashValue")
     */
    private ?string $hashValue = null;

    public function getMaskedNumber(): ?string
    {
        return $this->maskedNumber;
    }

    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function getHolderSegment(): ?string
    {
        return $this->holderSegment;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getHashValue(): ?string
    {
        return $this->hashValue;
    }
}
