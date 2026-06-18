<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\SchemeTokenType;

final class SchemeToken
{
    #[SerializedName('Eci')]
    private ?string $eci = null;

    public function __construct(
        #[SerializedName('Number')]
        private readonly string $number,
        #[SerializedName('ExpMonth')]
        private readonly int $expMonth,
        #[SerializedName('ExpYear')]
        private readonly int $expYear,
        #[SerializedName('AuthValue')]
        private readonly string $authValue,
        #[SerializedName('TokenType')]
        private readonly SchemeTokenType $tokenType,
    ) {
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpMonth(): int
    {
        return $this->expMonth;
    }

    public function getExpYear(): int
    {
        return $this->expYear;
    }

    public function getAuthValue(): string
    {
        return $this->authValue;
    }

    public function getEci(): ?string
    {
        return $this->eci;
    }

    public function setEci(?string $eci): self
    {
        $this->eci = $eci;

        return $this;
    }

    public function getTokenType(): SchemeTokenType
    {
        return $this->tokenType;
    }
}
