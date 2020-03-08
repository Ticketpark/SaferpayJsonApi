<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Tests\CommonResponseTest;
use Ticketpark\SaferpayJson\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Transaction\CancelResponse;

class CancelRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(CancelRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            CancelRequest::class,
            CancelResponse::class
        );
    }
}
