<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Risk
{
    public const BLOCKREASON_BLACKLIST_IP = 'BLACKLIST_IP';
    public const BLOCKREASON_BLACKLIST_IP_ORIGIN = 'BLACKLIST_IP_ORIGIN';
    public const BLOCKREASON_BLACKLIST_PAYMENT_MEANS = 'BLACKLIST_PAYMENT_MEANS';
    public const BLOCKREASON_BLACKLIST_PAYMENT_MEANS_ORIGIN = 'BLACKLIST_PAYMENT_MEANS_ORIGIN';

    /**
     * @var string|null
     * @SerializedName("BlockReason")
     * @Type("string")
     */
    private $blockReason;

    /**
     * @var string|null
     * @SerializedName("IpLocation")
     * @Type("string")
     */
    private $ipLocation;

    public function getBlockReason(): ?string
    {
        return $this->blockReason;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }
}
