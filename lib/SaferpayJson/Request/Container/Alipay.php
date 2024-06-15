<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Alipay
{
    /**
     * @SerializedName("LocalWallet")
     */
    private string $localWallet;

    public function __construct(string $localWallet)
    {
        $this->localWallet = $localWallet;
    }

    public function getLocalWallet(): ?string
    {
        return $this->localWallet;
    }
}
