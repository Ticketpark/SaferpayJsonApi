<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\SecureAliasStore\InsertRequest;
use Ticketpark\SaferpayJson\SecureAliasStore\InsertResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class InsertRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(InsertRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            InsertRequest::class,
            InsertResponse::class
        );
    }
}
