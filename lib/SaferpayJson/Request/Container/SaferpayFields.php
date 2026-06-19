<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class SaferpayFields
{
    public function __construct(
        #[SerializedName('Token')]
        private string $token,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
