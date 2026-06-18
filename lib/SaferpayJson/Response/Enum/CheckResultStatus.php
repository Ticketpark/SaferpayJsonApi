<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum CheckResultStatus: string
{
    case Ok = 'OK';
    case NotPerformed = 'NOT_PERFORMED';
}
