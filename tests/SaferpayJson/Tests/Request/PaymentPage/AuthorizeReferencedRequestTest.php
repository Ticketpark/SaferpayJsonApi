<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\Request\PaymentPage\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\AuthorizeReferencedResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AuthorizeReferencedRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AuthorizeReferencedRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeReferencedRequest::class,
            AuthorizeReferencedResponse::class
        );
    }
}
