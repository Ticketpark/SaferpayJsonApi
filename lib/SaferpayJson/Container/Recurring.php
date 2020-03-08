<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Recurring
{
    /**
     * @var bool
     * @SerializedName("Initial")
     */
    protected $initial;

    public function __construct($initial = true)
    {
        $this->initial = $initial;
    }

    /**
     * @return bool
     */
    public function isInitial()
    {
        return $this->initial;
    }

    /**
     * @param bool $initial
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;
    }
}
