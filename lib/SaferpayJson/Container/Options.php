<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Options
{
    /**
     * @var bool
     * @SerializedName("PreAuth")
     */
    protected $preAuth;

    public function isPreAuth(): ?bool
    {
        return $this->preAuth;
    }

    public function setPreAuth(bool $preAuth): self
    {
        $this->preAuth = $preAuth;

        return $this;
    }
}
