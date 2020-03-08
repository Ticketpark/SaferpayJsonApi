<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response;

use Ticketpark\SaferpayJson\Container\ResponseHeader;

interface ResponseInterface
{
    public function getResponseHeader(): ResponseHeader;
    public function setResponseHeader(ResponseHeader $responseHeader): ResponseInterface;
}