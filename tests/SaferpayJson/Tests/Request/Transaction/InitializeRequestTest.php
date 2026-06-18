<?php

declare(strict_types=1);

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Transaction\InitializeRequest;
use Ticketpark\SaferpayJson\Response\Transaction\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class InitializeRequestTest extends CommonRequestTestCase
{
    protected function getInstance(): InitializeRequest
    {
        return new InitializeRequest(
            $this->getRequestConfig(),
            'someTerminalId',
            new Payment(
                new Amount(5000, 'CHF'),
            ),
            new ReturnUrl('success-url'),
        );
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeResponse::class,
        );
    }
}
