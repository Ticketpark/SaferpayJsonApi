<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum TokenizationStatus: string
{
    case Successful = 'SUCCESSFUL';
    case Failed = 'FAILED';
    case SchemeNotSupported = 'SCHEME_NOT_SUPPORTED';
    case AcquirerNotSupported = 'ACQUIRER_NOT_SUPPORTED';
    case NotPerformed = 'NOT_PERFORMED';
    case DeniedByScheme = 'DENIED_BY_SCHEME';
}
