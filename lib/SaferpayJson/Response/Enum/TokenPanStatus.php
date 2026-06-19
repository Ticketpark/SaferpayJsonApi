<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum TokenPanStatus: string
{
    case Active = 'ACTIVE';
    case Suspended = 'SUSPENDED';
    case Deleted = 'DELETED';
    case ActivationInProgress = 'ACTIVATION_IN_PROGRESS';
}
