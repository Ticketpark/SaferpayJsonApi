<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasInsertRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasInsertResponse::class
        );
    }

    public function getInstance()
    {
        return new AliasInsertRequest(
            $this->getRequestConfig(),
            new RegisterAlias(),
            AliasInsertRequest::TYPE_CARD,
            new ReturnUrls('success-url', 'fail-url')
        );
    }
}
