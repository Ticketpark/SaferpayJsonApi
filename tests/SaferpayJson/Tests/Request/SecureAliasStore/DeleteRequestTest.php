<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class DeleteRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(AliasDeleteRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasDeleteRequest::class,
            AliasDeleteResponse::class
        );
    }
}
