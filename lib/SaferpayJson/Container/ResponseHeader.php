<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ResponseHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     * @Type("string")
     */
    protected $specVersion = '1.2';

    /**
     * @var string
     * @SerializedName("RequestId")
     * @Type("string")
     */
    protected $requestId;

    public function getSpecVersion(): string
    {
        return $this->specVersion;
    }

    public function setSpecVersion(string $specVersion): self
    {
        $this->specVersion = $specVersion;

        return $this;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }
}
