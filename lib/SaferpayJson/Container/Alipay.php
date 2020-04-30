<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Alipay
{
    /**
     * @var string
     * @SerializedName("LocalWallet")
     * @Type("string")
     */
    protected $localWallet;

    public function __construct(string $localWallet)
    {
        $this->localWallet = $localWallet;
    }

    public function getLocalWallet(): ?string
    {
        return $this->localWallet;
    }

    public function setLocalWallet(string $localWallet): self
    {
        $this->localWallet = $localWallet;

        return $this;
    }
}
