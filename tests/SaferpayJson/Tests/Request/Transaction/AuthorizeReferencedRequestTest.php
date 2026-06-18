<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeReferencedResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AuthorizeReferencedRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeReferencedResponse::class,
        );
    }

    protected function getInstance(): AuthorizeReferencedRequest
    {
        return new AuthorizeReferencedRequest(
            $this->getRequestConfig(),
            'someTerminalId',
            new Payment(
                new Amount(5000, 'CHF'),
            ),
            new TransactionReference(),
        );
    }
}
