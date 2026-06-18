<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum BlockReason: string
{
    case BlacklistIp = 'BLACKLIST_IP';
    case BlacklistIpOrigin = 'BLACKLIST_IP_ORIGIN';
    case BlacklistPaymentMeans = 'BLACKLIST_PAYMENT_MEANS';
    case BlacklistPaymentMeansOrigin = 'BLACKLIST_PAYMENT_MEANS_ORIGIN';
}
