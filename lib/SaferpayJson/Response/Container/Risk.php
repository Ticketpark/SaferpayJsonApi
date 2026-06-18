<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\BlockReason;

final class Risk
{
    #[SerializedName('BlockReason')]
    private ?BlockReason $blockReason = null;

    #[SerializedName('IpLocation')]
    private ?string $ipLocation = null;

    public function getBlockReason(): ?BlockReason
    {
        return $this->blockReason;
    }

    public function getIpLocation(): ?string
    {
        return $this->ipLocation;
    }
}
