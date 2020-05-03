<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Container\Amount;
use Ticketpark\SaferpayJson\Container\CaptureReference;
use Ticketpark\SaferpayJson\Container\Refund;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Transaction\RefundResponse;

class RefundRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            RefundResponse::class
        );
    }

    public function getInstance()
    {
        return new RefundRequest(
            $this->getRequestConfig(),
            new Refund(
                new Amount(5000, 'CHF')
            ),
            new CaptureReference()
        );
    }
}
