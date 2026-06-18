<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\SecureCardData;

use Ticketpark\SaferpayJson\Request\Container\Card;
use Ticketpark\SaferpayJson\Request\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Request\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasUpdateRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasUpdateResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AliasUpdateRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AliasUpdateResponse::class,
        );
    }

    public function getInstance(): AliasUpdateRequest
    {
        return new AliasUpdateRequest(
            $this->getRequestConfig(),
            new UpdateAlias('some-id'),
            new UpdatePaymentMeans(
                new Card(),
            ),
        );
    }
}
