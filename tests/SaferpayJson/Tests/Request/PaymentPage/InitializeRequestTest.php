<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\PaymentPage;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class InitializeRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeResponse::class,
        );
    }

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
}
