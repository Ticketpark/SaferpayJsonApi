<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Ideal
{
    /**
     * @var string
     * @SerializedName("IssuerId")
     * @Type("string")
     */
    private $issuerId;

    public function __construct(string $issuerId)
    {
        $this->issuerId = $issuerId;
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }
}
