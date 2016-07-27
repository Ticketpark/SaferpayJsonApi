<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class RequestHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     */
    protected $specVersion = '1.2';

    /**
     * @var string
     * @SerializedName("CustomerId")
     */
    protected $customerId;

    /**
     * @var string
     * @SerializedName("RequestId")
     */
    protected $requestId;

    /**
     * @var int
     * @SerializedName("RetryIndicator")
     */
    protected $retryIndicator = 0;

    /**
     * @return string
     */
    public function getSpecVersion()
    {
        return $this->specVersion;
    }

    /**
     * @param string $specVersion
     * @return Header
     */
    public function setSpecVersion($specVersion)
    {
        $this->specVersion = $specVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return Header
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

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
     * @return Header
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetryIndicator()
    {
        return $this->retryIndicator;
    }

    /**
     * @param int $retryIndicator
     * @return Header
     */
    public function setRetryIndicator($retryIndicator)
    {
        $this->retryIndicator = $retryIndicator;

        return $this;
    }
}