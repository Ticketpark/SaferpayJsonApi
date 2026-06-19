<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum Gender: string
{
    case Male = 'MALE';
    case Female = 'FEMALE';
    case Diverse = 'DIVERSE';
    case Company = 'COMPANY';
}
