<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Alias
{
    /**
     * @SerializedName("Id")
     */
    private ?string $id = null;

    /**
     * @SerializedName("Lifetime")
     */
    private ?int $lifetime = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }
}
