<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum FraudPreventionResult: string
{
    case Approved = 'APPROVED';
    case Challenged = 'CHALLENGED';
}
