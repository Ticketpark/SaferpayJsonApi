<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Installment
{
    /**
     * @var bool
     * @SerializedName("Initial")
     */
    private $initial;

    public function __construct(bool $initial)
    {
        $this->initial = $initial;
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }
}
