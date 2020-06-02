<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\PaymentPage;

use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AssertRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            AssertResponse::class
        );
    }

    protected function getInstance()
    {
        return new AssertRequest(
            $this->getRequestConfig(),
            'someTokenId'
        );
    }
}
