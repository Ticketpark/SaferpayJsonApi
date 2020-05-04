<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\ResponseHeader;

abstract class Response
{
    /**
     * @var ResponseHeader
     * @SerializedName("ResponseHeader")
     * @Type("Ticketpark\SaferpayJson\Response\Container\ResponseHeader")
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
