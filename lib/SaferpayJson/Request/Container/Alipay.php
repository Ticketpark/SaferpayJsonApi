<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Alipay
{
    /**
     * @var string
     * @SerializedName("LocalWallet")
     */
    private $localWallet;

    public function __construct(string $localWallet)
    {
        $this->localWallet = $localWallet;
    }

    public function getLocalWallet(): ?string
    {
        return $this->localWallet;
    }
}
