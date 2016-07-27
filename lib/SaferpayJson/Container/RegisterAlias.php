<?php

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
    public function getIdGenerator()
    {
        return $this->IdGenerator;
    }

    /**
     * @param string $idGenerator
     * @return RegisterAlias
     */
    public function setIdGenerator($idGenerator)
    {
        $this->IdGenerator = $idGenerator;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RegisterAlias
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * @param int $lifetime
     * @return RegisterAlias
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;

        return $this;
    }
}