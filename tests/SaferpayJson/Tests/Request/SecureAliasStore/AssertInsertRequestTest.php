<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasAssertInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AssertInsertRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AliasAssertInsertRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasAssertInsertRequest::class,
            AliasAssertInsertResponse::class
        );
    }
}
