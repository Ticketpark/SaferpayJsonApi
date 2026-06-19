<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum CardHolderSegment: string
{
    case Unspecified = 'UNSPECIFIED';
    case Consumer = 'CONSUMER';
    case Corporate = 'CORPORATE';
    case CorporateAndConsumer = 'CORPORATE_AND_CONSUMER';
}
