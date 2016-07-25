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
}