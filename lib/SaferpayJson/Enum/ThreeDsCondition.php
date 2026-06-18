<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Enum;

enum ThreeDsCondition: string
{
    case ThreeDsAuthenticationSuccessfulOrAttempted = 'THREE_DS_AUTHENTICATION_SUCCESSFUL_OR_ATTEMPTED';
    case WithSuccessfulThreeDsChallenge = 'WITH_SUCCESSFUL_THREE_DS_CHALLENGE';
    case None = 'NONE';
}
