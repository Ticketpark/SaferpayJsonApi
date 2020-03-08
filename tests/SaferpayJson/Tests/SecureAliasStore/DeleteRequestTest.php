<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\SecureAliasStore\DeleteRequest;
use Ticketpark\SaferpayJson\SecureAliasStore\DeleteResponse;
use Ticketpark\SaferpayJson\Tests\CommonResponseTest;

class DeleteRequestTest extends CommonResponseTest
{
    public function testErrorResponse()
    {
        parent::doTestErrorResponse(DeleteRequest::class);
    }

    public function testSuccessfulResponse()
    {
        parent::doTestSuccessfulResponse(
            DeleteRequest::class,
            DeleteResponse::class
        );
    }
}
