<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RegisterAlias
{
    /**
     * @var string
     * @SerializedName("IdGenerator")
     * @Type("string")
     */
    protected $IdGenerator="RANDOM";

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

    /**
     * @return string
     */
    public function getIdGenerator(): string
    {
        return $this->IdGenerator;
    }

    /**
     * @param string $idGenerator
     * @return RegisterAlias
     */
    public function setIdGenerator(string $idGenerator): self
    {
        $this->IdGenerator = $idGenerator;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RegisterAlias
     */
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
