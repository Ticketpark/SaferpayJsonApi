<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum ThreeDsTransStatus: string
{
    case Y = 'Y';
    case A = 'A';
    case U = 'U';
    case I = 'I';
}
