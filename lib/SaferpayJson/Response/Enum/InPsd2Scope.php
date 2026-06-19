<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum InPsd2Scope: string
{
    case Yes = 'YES';
    case No = 'NO';
    case Unknown = 'UNKNOWN';
}
