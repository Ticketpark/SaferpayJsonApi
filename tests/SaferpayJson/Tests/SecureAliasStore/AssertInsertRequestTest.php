<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\SecureAliasStore\AssertInsertRequest;
use Ticketpark\SaferpayJson\SecureAliasStore\AssertInsertResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class AssertInsertRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(AssertInsertRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            AssertInsertRequest::class,
            AssertInsertResponse::class
        );
    }
}
