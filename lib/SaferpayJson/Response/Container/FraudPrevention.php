<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class FraudPrevention
{
    public const APPROVED = 'APPROVED';
    public const MANUAL_REVIEW = 'MANUAL_REVIEW';

    /**
     * @SerializedName("Result")
     */
    private ?string $result = null;

    public function getResult(): ?string
    {
        return $this->result;
    }
}
