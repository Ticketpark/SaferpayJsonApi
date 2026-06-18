<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class TokenPan
{
    #[SerializedName('MaskedNumber')]
    private ?string $maskedNumber = null;

    #[SerializedName('ExpYear')]
    private ?int $expYear = null;

    #[SerializedName('ExpMonth')]
    private ?int $expMonth = null;

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
}
