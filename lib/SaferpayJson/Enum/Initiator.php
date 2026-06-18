<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum Initiator: string
{
    case Merchant = 'MERCHANT';
    case Payer = 'PAYER';
}
