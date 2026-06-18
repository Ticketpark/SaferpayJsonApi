<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class A2a
{
    public function __construct(
        #[SerializedName('AccountHolderName')]
        private string $accountHolderName,
    ) {
    }

    public function getAccountHolderName(): string
    {
        return $this->accountHolderName;
    }
}
