<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum Wallet: string
{
    case ApplePay = 'APPLEPAY';
    case GooglePay = 'GOOGLEPAY';
    case ClickToPay = 'CLICKTOPAY';
}
