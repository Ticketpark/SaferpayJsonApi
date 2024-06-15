<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Container\ResponseHeader;

abstract class Response
{
    /**
     * @SerializedName("ResponseHeader")
     */
    protected ?ResponseHeader $responseHeader = null;

    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->responseHeader;
    }
}
