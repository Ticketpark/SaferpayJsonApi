<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Installment
{
    /**
     * @SerializedName("Initial")
     */
    private bool $initial;

    public function __construct(bool $initial)
    {
        $this->initial = $initial;
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }
}
