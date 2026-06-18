<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum AddressSource: string
{
    case None = 'NONE';
    case Saferpay = 'SAFERPAY';
    case PreferPaymentMethod = 'PREFER_PAYMENTMETHOD';
}
