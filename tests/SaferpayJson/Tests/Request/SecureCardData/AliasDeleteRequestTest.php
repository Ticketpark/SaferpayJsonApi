<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasDeleteRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasDeleteResponse::class
        );
    }

    public function getInstance()
    {
        return new AliasDeleteRequest(
            $this->getRequestConfig(),
            'someAliasId'
        );
    }
}
