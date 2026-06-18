<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum OrderItemType: string
{
    case Digital = 'DIGITAL';
    case Physical = 'PHYSICAL';
    case Service = 'SERVICE';
    case Giftcard = 'GIFTCARD';
    case Discount = 'DISCOUNT';
    case ShippingFee = 'SHIPPINGFEE';
    case SalesTax = 'SALESTAX';
    case Surcharge = 'SURCHARGE';
}
