<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AssertRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AssertRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AssertRequest::class,
            AssertResponse::class
        );
    }
}
