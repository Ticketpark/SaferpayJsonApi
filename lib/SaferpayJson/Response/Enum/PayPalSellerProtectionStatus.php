<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum PayPalSellerProtectionStatus: string
{
    case Eligible = 'ELIGIBLE';
    case PartiallyEligible = 'PARTIALLY_ELIGIBLE';
    case NotEligible = 'NOT_ELIGIBLE';
}
