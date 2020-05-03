<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertDirectResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InsertDirectRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AliasInsertDirectRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasInsertDirectRequest::class,
            AliasInsertDirectResponse::class
        );
    }
}
