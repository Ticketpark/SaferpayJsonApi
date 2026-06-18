<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\CardFundingSource;
use Ticketpark\SaferpayJson\Response\Enum\CardHolderSegment;

final class Card
{
    #[SerializedName('MaskedNumber')]
    private ?string $maskedNumber = null;

    #[SerializedName('ExpYear')]
    private ?int $expYear = null;

    #[SerializedName('ExpMonth')]
    private ?int $expMonth = null;

    #[SerializedName('HolderName')]
    private ?string $holderName = null;

    #[SerializedName('HolderSegment')]
    private ?CardHolderSegment $holderSegment = null;

    #[SerializedName('FundingSource')]
    private ?CardFundingSource $fundingSource = null;

    #[SerializedName('CountryCode')]
    private ?string $countryCode = null;

    #[SerializedName('HashValue')]
    private ?string $hashValue = null;

    #[SerializedName('TokenPan')]
    private ?TokenPan $tokenPan = null;

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

    public function getHolderSegment(): ?CardHolderSegment
    {
        return $this->holderSegment;
    }

    public function getFundingSource(): ?CardFundingSource
    {
        return $this->fundingSource;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getHashValue(): ?string
    {
        return $this->hashValue;
    }

    public function getTokenPan(): ?TokenPan
    {
        return $this->tokenPan;
    }
}
