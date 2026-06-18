<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\FraudPreventionResult;

final class FraudPrevention
{
    #[SerializedName('Result')]
    private ?FraudPreventionResult $result = null;

    public function getResult(): ?FraudPreventionResult
    {
        return $this->result;
    }
}
