<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Transaction\RefundResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class RefundRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            RefundResponse::class,
        );
    }

    #[\Override]
    public function getInstance(): RefundRequest
    {
        return new RefundRequest(
            $this->getRequestConfig(),
            new Refund(
                new Amount(5000, 'CHF'),
            ),
            new CaptureReference(),
        );
    }
}
