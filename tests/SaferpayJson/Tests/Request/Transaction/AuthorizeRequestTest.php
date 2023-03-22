<?php

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AuthorizeRequestTest extends CommonRequestTest
{
    protected function getInstance()
    {
        return new AuthorizeRequest(
            $this->getRequestConfig(),
            'someToken123'
        );
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeResponse::class
        );
    }
}
