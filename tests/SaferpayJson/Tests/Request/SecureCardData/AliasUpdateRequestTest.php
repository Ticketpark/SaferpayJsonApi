<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Container\Card;
use Ticketpark\SaferpayJson\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasUpdateRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasUpdateResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasUpdateRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasUpdateResponse::class
        );
    }

    public function getInstance()
    {
        return new AliasUpdateRequest(
            $this->getRequestConfig(),
            new UpdateAlias('some-id'),
            new UpdatePaymentMeans(
                new Card()
            )
        );
    }
}
