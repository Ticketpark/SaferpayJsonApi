<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum CardScheme: string
{
    case Mastercard = 'MASTERCARD';
    case Visa = 'VISA';
    case Jcb = 'JCB';
    case Diners = 'DINERS';
    case Amex = 'AMEX';
}
