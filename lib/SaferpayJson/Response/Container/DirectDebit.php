<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class DirectDebit
{
    /**
     * @SerializedName("MandateId")
     */
    private ?string $mandateId = null;

    /**
     * @SerializedName("CreditorId")
     */
    private ?string $creditorId = null;

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }
}
