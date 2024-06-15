<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class UpdateAlias
{
    /**
     * @SerializedName("Id")
     */
    private string $id;

    /**
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    private ?int $lifetime = null;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }

    public function setLifetime(?int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }
}
