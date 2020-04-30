<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RegisterAlias
{
    const ID_GENERATOR_MANUAL = 'MANUAL';
    const ID_GENERATOR_RANDOM = 'RANDOM';
    const ID_GENERATOR_RANDOM_UNIQUE = 'RANDOM_UNIQUE';

    /**
     * @var string
     * @SerializedName("IdGenerator")
     * @Type("string")
     */
    protected $idGenerator;

    /**
     * @var string
     * @SerializedName("Id")
     * @Type("string")
     */
    protected $id;

    /**
     * @var int
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    protected $lifetime;

    public function __construct(string $idGenerator = self::ID_GENERATOR_RANDOM)
    {
        $this->idGenerator = $idGenerator;
    }

    public function getIdGenerator(): string
    {
        return $this->idGenerator;
    }

    public function setIdGenerator(string $idGenerator): self
    {
        $this->idGenerator = $idGenerator;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLifetime(): int
    {
        return $this->lifetime;
    }

    public function setLifetime(int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }
}
