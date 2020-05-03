<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\Container\Amount;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\PaymentPage\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\AuthorizeReferencedResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AuthorizeReferencedRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeReferencedResponse::class
        );
    }

    protected function getInstance()
    {
        return new AuthorizeReferencedRequest(
            $this->getRequestConfig(),
            'someTerminalId',
            new Payment(
                new Amount(5000, 'CHF')
            ),
            new TransactionReference()
        );
    }
}
