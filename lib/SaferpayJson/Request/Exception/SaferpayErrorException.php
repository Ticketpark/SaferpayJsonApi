<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Exception;

use Ticketpark\SaferpayJson\Response\ErrorResponse;

class SaferpayErrorException extends \Exception implements SaferpayException
{
    private ErrorResponse $errorResponse;

    public function __construct(ErrorResponse $errorResponse)
    {
        $this->errorResponse = $errorResponse;

        $behaviour = $errorResponse->getBehaviour();

        parent::__construct(sprintf(
            '[%s] %s: %s',
            null !== $behaviour ? $behaviour->value : '',
            $errorResponse->getErrorName(),
            $errorResponse->getErrorMessage(),
        ));
    }

    public function getErrorResponse(): ErrorResponse
    {
        return $this->errorResponse;
    }
}
