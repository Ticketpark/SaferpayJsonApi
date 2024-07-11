<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Ideal
{
    /**
     * @SerializedName("IssuerId")
     */
    private string $issuerId;

    public function __construct(string $issuerId)
    {
        $this->issuerId = $issuerId;
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }
}
