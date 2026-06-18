<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum Initiator: string
{
    case Merchant = 'MERCHANT';
    case Payer = 'PAYER';
}
