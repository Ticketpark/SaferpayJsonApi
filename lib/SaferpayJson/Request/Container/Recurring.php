<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Recurring
{
    public function __construct(
        #[SerializedName('Initial')]
        private bool $initial = true,
    ) {
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }
}
