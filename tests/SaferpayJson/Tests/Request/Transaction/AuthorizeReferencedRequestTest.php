<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeReferencedResponse;
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
