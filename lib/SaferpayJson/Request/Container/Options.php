<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Options
{
    /**
     * @var bool|null
     * @SerializedName("PreAuth")
     */
    private $preAuth;

    public function isPreAuth(): ?bool
    {
        return $this->preAuth;
    }

    public function setPreAuth(?bool $preAuth): self
    {
        $this->preAuth = $preAuth;

        return $this;
    }
}
