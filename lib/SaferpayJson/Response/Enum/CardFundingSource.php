<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum CardFundingSource: string
{
    case Unspecified = 'UNSPECIFIED';
    case Credit = 'CREDIT';
    case Debit = 'DEBIT';
    case Prepaid = 'PREPAID';
}
