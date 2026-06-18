<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum AliasInsertType: string
{
    case Card = 'CARD';
    case BankAccount = 'BANK_ACCOUNT';
    case Postfinance = 'POSTFINANCE';
    case Twint = 'TWINT';
}
