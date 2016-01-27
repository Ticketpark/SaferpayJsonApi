<?php

namespace Ticketpark\SaferpayJson\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\ResponseHeader;

abstract class Response
{
    /**
     * @var Ticketpark\SaferpayJson\Response\ResponseHeader
     * @SerializedName("ResponseHeader")
     * @Type("Ticketpark\SaferpayJson\Response\ResponseHeader")
     */
    protected $responseHeader;

    /**
     * @return Ticketpark\SaferpayJson\Response\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * @param Ticketpark\SaferpayJson\Response\ResponseHeader $responseHeader
     * @return Response
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }
}