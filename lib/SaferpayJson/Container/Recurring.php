<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Recurring
{
    /**
     * @var bool
     * @SerializedName("Initial")
     */
    protected $initial;

    public function __construct(bool $initial = true)
    {
        $this->initial = $initial;
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }

    public function setInitial(bool $initial): self
    {
        $this->initial = $initial;

        return $this;
    }
}
