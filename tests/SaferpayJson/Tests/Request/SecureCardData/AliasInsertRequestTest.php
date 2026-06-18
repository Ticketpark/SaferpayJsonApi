<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\SecureCardData;

use Ticketpark\SaferpayJson\Enum\AliasIdGenerator;
use Ticketpark\SaferpayJson\Enum\AliasInsertType;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AliasInsertRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasInsertResponse::class,
        );
    }

    public function getInstance()
    {
        return new AliasInsertRequest(
            $this->getRequestConfig(),
            new RegisterAlias(AliasIdGenerator::Random),
            AliasInsertType::Card,
            new ReturnUrl('success-url'),
        );
    }
}
