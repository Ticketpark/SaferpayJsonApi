<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\SecureCardData;

use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
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
            new RegisterAlias(RegisterAlias::ID_GENERATOR_RANDOM),
            AliasInsertRequest::TYPE_CARD,
            new ReturnUrl('success-url')
        );
    }
}
