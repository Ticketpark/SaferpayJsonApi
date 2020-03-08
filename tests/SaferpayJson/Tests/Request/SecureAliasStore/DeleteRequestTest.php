<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureAliasStore\DeleteRequest;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\DeleteResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class DeleteRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(DeleteRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            DeleteRequest::class,
            DeleteResponse::class
        );
    }
}
