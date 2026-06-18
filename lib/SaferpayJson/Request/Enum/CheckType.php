<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum CheckType: string
{
    case Online = 'ONLINE';
    case OnlineStrong = 'ONLINE_STRONG';
}
