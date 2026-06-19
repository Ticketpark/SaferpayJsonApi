<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class UpdatePaymentMeans
{
    public function __construct(
        #[SerializedName('Card')]
        private Card $card,
    ) {
    }

    public function getCard(): Card
    {
        return $this->card;
    }
}
