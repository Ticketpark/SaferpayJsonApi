<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RegisterAlias
{
    const ID_GENERATOR_MANUAL = 'MANUAL';
    const ID_GENERATOR_RANDOM = 'RANDOM';
    const ID_GENERATOR_RANDOM_UNIQUE = 'RANDOM_UNIQUE';

    /**
     * @var string
     * @SerializedName("IdGenerator")
     */
    private $idGenerator;

    /**
     * @var string|null
     * @SerializedName("Id")
     */
    private $id;

    /**
     * @var int|null
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    private $lifetime;

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
