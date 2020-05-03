<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasAssertInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasAssertInsertRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasAssertInsertResponse::class
        );
    }

    public function getInstance()
    {
        return new AliasAssertInsertRequest(
            $this->getRequestConfig(),
            'someToken'
        );
    }
}
