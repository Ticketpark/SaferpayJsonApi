<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class TokenizationTokenPan
{
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_SUSPENDED = 'SUSPENDED';
    public const STATUS_DELETED = 'DELETED';
    public const STATUS_ACTIVATION_IN_PROGRESS = 'ACTIVATION_IN_PROGRESS';

    /**
     * @SerializedName("CardImageUrl")
     */
    private ?string $cardImageUrl = null;

    /**
     * @SerializedName("ExpMonth")
     */
    private ?int $expMonth = null;

    /**
     * @SerializedName("ExpYear")
     */
    private ?int $expYear = null;

    /**
     * @SerializedName("Status")
     */
    private ?string $status = null;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
