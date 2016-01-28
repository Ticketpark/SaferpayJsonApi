<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ResponseHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     * @Type("double")
     */
    protected $specVersion = '1.2';

    /**
     * @var string
     * @SerializedName("RequestId")
     * @Type("string")
     */
    protected $requestId;

    /**
     * @return string
     */
    public function getSpecVersion()
    {
        return $this->specVersion;
    }

    /**
     * @param string $specVersion
     * @return ResponseHeader
     */
    public function setSpecVersion($specVersion)
    {
        $this->specVersion = $specVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return ResponseHeader
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }
}