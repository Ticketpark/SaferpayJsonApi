<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class A2a
{
    /**
     * @SerializedName("AccountHolderName")
     */
    private string $accountHolderName;

    public function __construct(string $accountHolderName)
    {
        $this->accountHolderName = $accountHolderName;
    }

    public function getAccountHolderName(): string
    {
        return $this->accountHolderName;
    }
}
