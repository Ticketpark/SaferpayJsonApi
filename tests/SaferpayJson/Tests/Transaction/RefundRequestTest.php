<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Tests\CommonResponseTest;
use Ticketpark\SaferpayJson\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Transaction\RefundResponse;

class RefundRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(RefundRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            RefundRequest::class,
            RefundResponse::class
        );
    }
}
