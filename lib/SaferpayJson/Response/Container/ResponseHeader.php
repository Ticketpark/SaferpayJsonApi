<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class ResponseHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     * @Type("string")
     */
    private $specVersion;

    /**
     * @var string
     * @SerializedName("RequestId")
     * @Type("string")
     */
    private $requestId;

    public function getSpecVersion(): string
    {
        return $this->specVersion;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }
}
