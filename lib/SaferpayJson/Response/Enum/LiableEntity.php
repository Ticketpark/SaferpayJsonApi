<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum LiableEntity: string
{
    case Merchant = 'MERCHANT';
    case ThreeDs = 'THREEDS';
}
