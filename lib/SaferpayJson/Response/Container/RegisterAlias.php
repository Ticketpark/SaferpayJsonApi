<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RegisterAlias
{
    /**
     * @var string|null
     * @SerializedName("Id")
     * @Type("string")
     */
    private $id;

    /**
     * @var int|null
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    private $lifetime;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }
}
