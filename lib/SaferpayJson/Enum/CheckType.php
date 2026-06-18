<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum CheckType: string
{
    case Online = 'ONLINE';
    case OnlineStrong = 'ONLINE_STRONG';
}
