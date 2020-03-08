<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\PaymentPage\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\PaymentPage\AuthorizeReferencedResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class AuthorizeReferencedRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(AuthorizeReferencedRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            AuthorizeReferencedRequest::class,
            AuthorizeReferencedResponse::class
        );
    }
}
