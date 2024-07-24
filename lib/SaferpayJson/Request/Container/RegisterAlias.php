<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class RegisterAlias
{
    public const ID_GENERATOR_MANUAL = 'MANUAL';
    public const ID_GENERATOR_RANDOM = 'RANDOM';
    public const ID_GENERATOR_RANDOM_UNIQUE = 'RANDOM_UNIQUE';

    /**
     * @SerializedName("IdGenerator")
     */
    private string $idGenerator;

    /**
     * @SerializedName("Id")
     */
    private ?string $id = null;

    /**
     * @SerializedName("Lifetime")
     */
    private ?int $lifetime = null;

    public function __construct(string $idGenerator)
    {
        $this->idGenerator = $idGenerator;
    }

    public function getIdGenerator(): string
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
