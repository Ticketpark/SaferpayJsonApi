<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum AuthenticationType: string
{
    case StrongCustomerAuthentication = 'STRONG_CUSTOMER_AUTHENTICATION';
    case Frictionless = 'FRICTIONLESS';
    case Attempt = 'ATTEMPT';
    case Unspecified = 'UNSPECIFIED';
    case None = 'NONE';
}
