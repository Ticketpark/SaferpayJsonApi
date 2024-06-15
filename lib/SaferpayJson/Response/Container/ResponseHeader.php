<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ResponseHeader
{
    /**
     * @SerializedName("SpecVersion")
     */
    private ?string $specVersion = null;

    /**
     * @SerializedName("RequestId")
     */
    private ?string $requestId = null;

    public function getSpecVersion(): ?string
    {
        return $this->specVersion;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
}
