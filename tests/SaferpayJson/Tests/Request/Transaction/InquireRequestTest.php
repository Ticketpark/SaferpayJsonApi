<?php

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;
use Ticketpark\SaferpayJson\Response\Transaction\InquireResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InquireRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InquireResponse::class
        );
    }

    protected function getInstance()
    {
        return new InquireRequest(
            $this->getRequestConfig(),
            new TransactionReference()
        );
    }
}
