<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InsertRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AliasInsertRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasInsertRequest::class,
            AliasInsertResponse::class
        );
    }
}
