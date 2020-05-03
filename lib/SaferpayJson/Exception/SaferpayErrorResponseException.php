<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Exception;

use Ticketpark\SaferpayJson\Response\ErrorResponse;

class SaferpayErrorResponseException extends \Exception
{
    /** @var ErrorResponse */
    private $errorResponse;

    public function __construct(ErrorResponse $errorResponse)
    {
        $this->errorResponse = $errorResponse;

        parent::__construct();
    }

    public function getErrorResponse(): ?ErrorResponse
    {
        return $this->errorResponse;
    }
}
