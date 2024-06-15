<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class SaferpayFields
{
    /**
     * @var string
     * @SerializedName("Token")
     */
    private $token;

    public function getToken(): ?string
    {
        return $this->token;
    }
}
