<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum AliasInsertType: string
{
    case Card = 'CARD';
    case BankAccount = 'BANK_ACCOUNT';
    case PostfinancePay = 'POSTFINANCEPAY';
    case Twint = 'TWINT';
    case Paypal = 'PAYPAL';
}
