<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum CardFormVerificationCode: string
{
    case None = 'NONE';
    case Mandatory = 'MANDATORY';
}
