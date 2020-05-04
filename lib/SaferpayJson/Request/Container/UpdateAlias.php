<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class UpdateAlias
{
    /**
     * @var string
     * @SerializedName("Id")
     */
    private $id;

    /**
     * @var int|null
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    private $lifetime;

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
