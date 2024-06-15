<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Options
{
    /**
     * @SerializedName("PreAuth")
     */
    private ?bool $preAuth = null;

    /**
     * @SerializedName("AllowPartialAuthorization")
     */
    private ?bool $allowPartialAuthorization = null;

    public function isPreAuth(): ?bool
    {
        return $this->preAuth;
    }

    public function setPreAuth(?bool $preAuth): self
    {
        $this->preAuth = $preAuth;

        return $this;
    }

    public function getAllowPartialAuthorization(): ?bool
    {
        return $this->allowPartialAuthorization;
    }

    public function setAllowPartialAuthorization(?bool $allowPartialAuthorization): self
    {
        $this->allowPartialAuthorization = $allowPartialAuthorization;

        return $this;
    }
}
