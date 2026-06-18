<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum SchemeTokenType: string
{
    case ApplePay = 'APPLEPAY';
    case GooglePay = 'GOOGLEPAY';
    case SamsungPay = 'SAMSUNGPAY';
    case ClickToPay = 'CLICKTOPAY';
    case Other = 'OTHER';
    case Mdes = 'MDES';
    case Vts = 'VTS';
}
