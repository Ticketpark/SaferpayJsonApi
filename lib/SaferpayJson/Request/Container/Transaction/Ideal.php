<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container\Transaction;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Ideal
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
