<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\TokenPanStatus;

final class TokenizationTokenPan
{
    #[SerializedName('CardImageUrl')]
    private ?string $cardImageUrl = null;

    #[SerializedName('ExpMonth')]
    private ?int $expMonth = null;

    #[SerializedName('ExpYear')]
    private ?int $expYear = null;

    #[SerializedName('Status')]
    private ?TokenPanStatus $status = null;

    public function getCardImageUrl(): ?string
    {
        return $this->cardImageUrl;
    }

    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    public function getStatus(): ?TokenPanStatus
    {
        return $this->status;
    }
}
