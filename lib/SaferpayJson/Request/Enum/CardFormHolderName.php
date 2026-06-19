<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum CardFormHolderName: string
{
    case None = 'NONE';
    case Mandatory = 'MANDATORY';
}
