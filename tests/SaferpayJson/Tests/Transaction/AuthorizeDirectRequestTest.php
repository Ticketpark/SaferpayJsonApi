<?php declare(strict_types=1);
namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Tests\CommonResponseTest;
use Ticketpark\SaferpayJson\Transaction\AuthorizeDirectRequest;
use Ticketpark\SaferpayJson\Transaction\AuthorizeDirectResponse;

class AuthorizeDirectRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(AuthorizeDirectRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            AuthorizeDirectRequest::class,
            AuthorizeDirectResponse::class
        );
    }
}
