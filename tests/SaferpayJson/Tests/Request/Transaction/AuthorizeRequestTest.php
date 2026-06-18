<?php

declare(strict_types=1);

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AuthorizeRequestTest extends CommonRequestTestCase
{
    protected function getInstance(): AuthorizeRequest
    {
        return new AuthorizeRequest(
            $this->getRequestConfig(),
            'someToken123',
        );
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeResponse::class,
        );
    }
}
