<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

trait RequestCommonsTrait
{
    public function getApiPath(): string
    {
        return self::API_PATH;
    }

    public function getResponseClass(): string
    {
        return self::RESPONSE_CLASS;
    }
}
