<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class SaferpayFields
{
    /**
     * @SerializedName("Token")
     */
    private ?string $token = null;

    public function getToken(): ?string
    {
        return $this->token;
    }
}
