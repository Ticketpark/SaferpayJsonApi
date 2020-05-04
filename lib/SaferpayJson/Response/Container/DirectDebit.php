<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class DirectDebit
{
    /**
     * @var string|null
     * @SerializedName("MandateId")
     * @Type("string")
     */
    private $mandateId;

    /**
     * @var string|null
     * @SerializedName("CreditorId")
     * @Type("string")
     */
    private $creditorId;

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }
}
