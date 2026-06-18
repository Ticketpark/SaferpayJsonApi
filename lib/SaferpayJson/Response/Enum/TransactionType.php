<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum TransactionType: string
{
    case Payment = 'PAYMENT';
    case Refund = 'REFUND';
}
