<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum ThreeDsAuthenticationMode: string
{
    case Challenge = 'CHALLENGE';
    case Frictionless = 'FRICTIONLESS';
}
