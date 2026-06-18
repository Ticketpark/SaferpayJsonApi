<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum AliasIdGenerator: string
{
    case Manual = 'MANUAL';
    case Random = 'RANDOM';
    case RandomUnique = 'RANDOM_UNIQUE';
}
