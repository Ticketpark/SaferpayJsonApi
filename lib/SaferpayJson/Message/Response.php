<?php declare(strict_types=1);

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

    public function getResponseHeader(): ResponseHeader
    {
        return $this->responseHeader;
    }

    public function setResponseHeader(ResponseHeader $responseHeader): self
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }
}
