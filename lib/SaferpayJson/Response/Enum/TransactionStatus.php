<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum TransactionStatus: string
{
    case Authorized = 'AUTHORIZED';
    case Canceled = 'CANCELED';
    case Captured = 'CAPTURED';
    case Pending = 'PENDING';
}
