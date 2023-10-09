<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class FraudPrevention
{
    public const APPROVED = 'APPROVED';
    public const MANUAL_REVIEW = 'MANUAL_REVIEW';

    /**
     * @var string|null
     * @SerializedName("Result")
     * @Type("string")
     */
    private $result;

    public function getResult(): ?string
    {
        return $this->result;
    }
}
