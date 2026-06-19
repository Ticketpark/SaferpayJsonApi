<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum HolderAuthenticationResult: string
{
    case Ok = 'OK';
    case NotSupported = 'NOT_SUPPORTED';
}
