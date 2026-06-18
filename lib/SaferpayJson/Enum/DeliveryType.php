<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum DeliveryType: string
{
    case Email = 'EMAIL';
    case Shop = 'SHOP';
    case HomeDelivery = 'HOMEDELIVERY';
    case Pickup = 'PICKUP';
    case Hq = 'HQ';
}
