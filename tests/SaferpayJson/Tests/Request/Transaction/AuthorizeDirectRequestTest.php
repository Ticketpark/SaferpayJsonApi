<?php declare(strict_types=1);
namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeDirectRequest;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeDirectResponse;

class AuthorizeDirectRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AuthorizeDirectRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AuthorizeDirectRequest::class,
            AuthorizeDirectResponse::class
        );
    }
}
