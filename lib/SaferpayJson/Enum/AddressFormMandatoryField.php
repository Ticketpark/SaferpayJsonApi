<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum AddressFormMandatoryField: string
{
    case City = 'CITY';
    case Company = 'COMPANY';
    case Country = 'COUNTRY';
    case Email = 'EMAIL';
    case Firstname = 'FIRSTNAME';
    case Lastname = 'LASTNAME';
    case Phone = 'PHONE';
    case Salutation = 'SALUTATION';
    case State = 'STATE';
    case Street = 'STREET';
    case Zip = 'ZIP';
}
