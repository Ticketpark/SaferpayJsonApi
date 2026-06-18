<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class UpdateAlias
{
    #[SerializedName('Lifetime')]
    private ?int $lifetime = null;

    public function __construct(
        #[SerializedName('Id')]
        private readonly string $id,
    ) {
    }

    public function getId(): string
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
