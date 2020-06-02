<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\PaymentPage;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrls;
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
