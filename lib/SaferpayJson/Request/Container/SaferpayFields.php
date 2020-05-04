<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class SaferpayFields
{
    /**
     * @var string
     * @SerializedName("Token")
     */
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}
