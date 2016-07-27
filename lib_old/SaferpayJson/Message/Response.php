<?php

namespace Ticketpark\SaferpayJson\Message;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\ResponseHeader;

abstract class Response
{
    /**
     * @var Ticketpark\SaferpayJson\Container\ResponseHeader
     * @SerializedName("ResponseHeader")
     * @Type("Ticketpark\SaferpayJson\Container\ResponseHeader")
     */
    protected $responseHeader;

    /**
     * @return Ticketpark\SaferpayJson\Container\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\ResponseHeader $responseHeader
     * @return Response
     */
    public function setResponseHeader(ResponseHeader $responseHeader)
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }
}