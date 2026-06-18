<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Installment
{
    public function __construct(
        #[SerializedName('Initial')]
        private bool $initial,
    ) {
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }
}
