<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\PaymentPage;

use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class InitializeRequestTest extends CommonRequestTest
{
    public function testErrorResponse(): void
    {
        parent::doTestErrorResponse(InitializeRequest::class);
    }

    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InitializeRequest::class,
            InitializeResponse::class
        );
    }
}
