<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum KlarnaShippingTypeAttribute: string
{
    case SignatureRequired = 'SIGNATURE_REQUIRED';
    case IdentificationRequired = 'IDENTIFICATION_REQUIRED';
    case ContactlessDelivery = 'CONTACTLESS_DELIVERY';
    case LeaveAtDoor = 'LEAVE_AT_DOOR';
    case LeaveAtCurb = 'LEAVE_AT_CURB';
    case LeaveWithNeighbour = 'LEAVE_WITH_NEIGHBOUR';
    case Express = 'EXPRESS';
    case Tracked = 'TRACKED';
    case Untracked = 'UNTRACKED';
}
