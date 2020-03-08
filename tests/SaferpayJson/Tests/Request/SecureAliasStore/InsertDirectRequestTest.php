<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureAliasStore\InsertDirectRequest;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\InsertDirectResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InsertDirectRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(InsertDirectRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InsertDirectRequest::class,
            InsertDirectResponse::class
        );
    }
}
