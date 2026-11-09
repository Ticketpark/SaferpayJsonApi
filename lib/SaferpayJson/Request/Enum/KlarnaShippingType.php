<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum KlarnaShippingType: string
{
    case ToDoor = 'TO_DOOR';
    case ToCurb = 'TO_CURB';
    case ToMailbox = 'TO_MAILBOX';
    case PickupBox = 'PICKUP_BOX';
    case PickupPoint = 'PICKUP_POINT';
    case PickupStore = 'PICKUP_STORE';
    case PickupWarehouse = 'PICKUP_WAREHOUSE';
    case DigitalDownload = 'DIGITAL_DOWNLOAD';
    case DigitalOther = 'DIGITAL_OTHER';
    case PhysicalOther = 'PHYSICAL_OTHER';
}
