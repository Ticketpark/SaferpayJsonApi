<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class FraudPrevention
{
    public const string APPROVED = 'APPROVED';
    public const string CHALLENGED = 'CHALLENGED';

    #[SerializedName('Result')]
    private ?string $result = null;

    public function getResult(): ?string
    {
        return $this->result;
    }
}
