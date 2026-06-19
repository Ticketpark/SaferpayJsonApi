<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\PaymentPage;

use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class AssertRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AssertResponse::class,
        );
    }

    #[\Override]
    protected function getInstance(): AssertRequest
    {
        return new AssertRequest(
            $this->getRequestConfig(),
            'someTokenId',
        );
    }
}
