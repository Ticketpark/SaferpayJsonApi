<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Ideal
{
    public function __construct(
        #[SerializedName('IssuerId')]
        private string $issuerId,
    ) {
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }
}
