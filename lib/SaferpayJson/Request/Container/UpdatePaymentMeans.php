<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class UpdatePaymentMeans
{
    /**
     * @SerializedName("Card")
     */
    private Card $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }
}
