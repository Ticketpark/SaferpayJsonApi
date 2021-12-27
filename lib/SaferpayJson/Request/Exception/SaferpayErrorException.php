<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Exception;

use Ticketpark\SaferpayJson\Response\ErrorResponse;

class SaferpayErrorException extends \Exception
{
    /** @var ErrorResponse */
    private $errorResponse;

    public function __construct(ErrorResponse $errorResponse)
    {
        $this->errorResponse = $errorResponse;

        parent::__construct(sprintf(
            '[%s] %s: %s',
            $errorResponse->getBehaviour(),
            $errorResponse->getErrorName(),
            $errorResponse->getErrorMessage()
        ));
    }

    public function getErrorResponse(): ?ErrorResponse
    {
        return $this->errorResponse;
    }
}
