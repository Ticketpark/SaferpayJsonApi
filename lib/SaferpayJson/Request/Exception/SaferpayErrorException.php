<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Exception;

use Ticketpark\SaferpayJson\Response\ErrorResponse;

class SaferpayErrorException extends \Exception implements SaferpayException
{
    public function __construct(private readonly ErrorResponse $errorResponse)
    {
        $behaviour = $this->errorResponse->getBehaviour();

        parent::__construct(sprintf(
            '[%s] %s: %s',
            $behaviour->value ?? '',
            $this->errorResponse->getErrorName(),
            $this->errorResponse->getErrorMessage(),
        ));
    }

    public function getErrorResponse(): ErrorResponse
    {
        return $this->errorResponse;
    }
}
