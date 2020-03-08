<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureAliasStore\AssertInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\AssertInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AssertInsertRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AssertInsertRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AssertInsertRequest::class,
            AssertInsertResponse::class
        );
    }
}
