<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum ErrorBehaviour: string
{
    case DoNotRetry = 'DO_NOT_RETRY';
    case OtherMeans = 'OTHER_MEANS';
    case Retry = 'RETRY';
    case RetryLater = 'RETRY_LATER';
}
