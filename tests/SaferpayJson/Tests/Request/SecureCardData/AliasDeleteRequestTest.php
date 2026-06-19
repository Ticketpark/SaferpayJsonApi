<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\SecureCardData;

use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AliasDeleteRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasDeleteResponse::class,
        );
    }

    #[\Override]
    public function getInstance(): AliasDeleteRequest
    {
        return new AliasDeleteRequest(
            $this->getRequestConfig(),
            'someAliasId',
        );
    }
}
