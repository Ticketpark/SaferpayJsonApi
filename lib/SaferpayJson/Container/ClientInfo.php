<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ClientInfo
{
    /**
     * @var string
     * @SerializedName("ShopInfo")
     * @Type("string")
     */
    protected $shopInfo;

    /**
     * @var string
     * @SerializedName("OsInfo")
     * @Type("string")
     */
    protected $osInfo;

    public function getShopInfo(): ?string
    {
        return $this->shopInfo;
    }

    public function setShopInfo(string $shopInfo): self
    {
        $this->shopInfo = $shopInfo;

        return $this;
    }

    public function getOsInfo(): ?string
    {
        return $this->osInfo;
    }

    public function setOsInfo(string $osInfo): self
    {
        $this->osInfo = $osInfo;

        return $this;
    }
}
