<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\AliasIdGenerator;

final class RegisterAlias
{
    #[SerializedName('Id')]
    private ?string $id = null;

    #[SerializedName('Lifetime')]
    private ?int $lifetime = null;

    public function __construct(
        #[SerializedName('IdGenerator')]
        private readonly AliasIdGenerator $idGenerator,
    ) {
    }

    public function getIdGenerator(): AliasIdGenerator
    {
        return $this->idGenerator;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
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
