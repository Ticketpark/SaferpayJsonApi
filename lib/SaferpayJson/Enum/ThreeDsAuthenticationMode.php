<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum ThreeDsAuthenticationMode: string
{
    case Challenge = 'CHALLENGE';
    case Frictionless = 'FRICTIONLESS';
}
