<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\Container\Amount;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InitializeRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeResponse::class
        );
    }

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
}
