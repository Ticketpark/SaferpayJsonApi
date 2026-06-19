<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum ThreeDsChallenge: string
{
    case Force = 'FORCE';
    case Avoid = 'AVOID';
}
