<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ClientInfo
{
    /**
     * @SerializedName("ShopInfo")
     */
    private ?string $shopInfo = null;

    /**
     * @SerializedName("OsInfo")
     */
    private ?string $osInfo = null;

    public function getShopInfo(): ?string
    {
        return $this->shopInfo;
    }

    public function setShopInfo(?string $shopInfo): self
    {
        $this->shopInfo = $shopInfo;

        return $this;
    }

    public function getOsInfo(): ?string
    {
        return $this->osInfo;
    }

    public function setOsInfo(?string $osInfo): self
    {
        $this->osInfo = $osInfo;

        return $this;
    }
}
