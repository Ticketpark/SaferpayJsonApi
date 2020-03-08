<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\SecureAliasStore\InsertDirectRequest;
use Ticketpark\SaferpayJson\SecureAliasStore\InsertDirectResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class InsertDirectRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(InsertDirectRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            InsertDirectRequest::class,
            InsertDirectResponse::class
        );
    }
}
