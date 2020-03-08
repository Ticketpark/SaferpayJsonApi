<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Tests\CommonResponseTest;
use Ticketpark\SaferpayJson\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Transaction\CaptureResponse;

class CaptureRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(CaptureRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            CaptureRequest::class,
            CaptureResponse::class
        );
    }
}
