<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Risk
{
    public const BLOCKREASON_BLACKLIST_IP = 'BLACKLIST_IP';
    public const BLOCKREASON_BLACKLIST_IP_ORIGIN = 'BLACKLIST_IP_ORIGIN';
    public const BLOCKREASON_BLACKLIST_PAYMENT_MEANS = 'BLACKLIST_PAYMENT_MEANS';
    public const BLOCKREASON_BLACKLIST_PAYMENT_MEANS_ORIGIN = 'BLACKLIST_PAYMENT_MEANS_ORIGIN';

    /**
     * @SerializedName("BlockReason")
     */
    private ?string $blockReason = null;

    /**
     * @SerializedName("IpLocation")
     */
    private ?string $ipLocation = null;

    public function getBlockReason(): ?string
    {
        return $this->blockReason;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }
}
