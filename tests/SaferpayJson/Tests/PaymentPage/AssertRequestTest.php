<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\PaymentPage\AssertResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class AssertRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(AssertRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            AssertRequest::class,
            AssertResponse::class
        );
    }
}
