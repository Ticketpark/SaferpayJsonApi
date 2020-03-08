<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\PaymentPage\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class InitializeRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(InitializeRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            InitializeRequest::class,
            InitializeResponse::class
        );
    }
}
