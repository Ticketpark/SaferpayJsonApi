<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureAliasStore\InsertRequest;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\InsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InsertRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(InsertRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InsertRequest::class,
            InsertResponse::class
        );
    }
}
