<?php

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Request\Transaction\InitializeRequest;
use Ticketpark\SaferpayJson\Response\Transaction\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InitializeRequestTest extends CommonRequestTest
{
    protected function getInstance()
    {
        return new InitializeRequest(
            $this->getRequestConfig(),
            'someTerminalId',
            new Payment(
                new Amount(5000, 'CHF')
            ),
            new ReturnUrls('success-url', 'fail-url')
        );
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeResponse::class
        );
    }
}
