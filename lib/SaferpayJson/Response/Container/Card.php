<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Card
{
    const HOLDER_SEGMENT_UNSPECIFIED = 'UNSPECIFIED';
    const HOLDER_SEGMENT_CONSUMER = 'CONSUMER';
    const HOLDER_SEGMENT_CORPORATE = 'CORPORATE';
    const HOLDER_SEGMENT_CORPORATE_AND_CONSUMER = 'CORPORATE_AND_CONSUMER';

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
     * @SerializedName("HolderSegment")
     * @Type("string")
     */
    private $holderSegment;

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
