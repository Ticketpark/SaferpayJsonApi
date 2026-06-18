<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Enum;

enum AuthenticationExemption: string
{
    case LowValue = 'LOW_VALUE';
    case TransactionRiskAnalysis = 'TRANSACTION_RISK_ANALYSIS';
    case Recurring = 'RECURRING';
}
