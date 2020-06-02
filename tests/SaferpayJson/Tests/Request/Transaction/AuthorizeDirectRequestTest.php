<?php declare(strict_types=1);
namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeDirectRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeDirectResponse;

class AuthorizeDirectRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeDirectResponse::class
        );
    }

    public function getInstance()
    {
        return new AuthorizeDirectRequest(
            $this->getRequestConfig(),
            'someTerminalId',
            new Payment(
                new Amount(5000, 'CHF')
            ),
            new PaymentMeans()
        );
    }
}
