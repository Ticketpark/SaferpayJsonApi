<?php

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
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
            new ReturnUrl('success-url')
        );
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeResponse::class
        );
    }
}
