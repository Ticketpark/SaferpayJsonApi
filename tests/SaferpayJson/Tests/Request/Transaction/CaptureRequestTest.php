<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class CaptureRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            CaptureResponse::class,
        );
    }

    #[\Override]
    public function getInstance(): CaptureRequest
    {
        return new CaptureRequest(
            $this->getRequestConfig(),
            new TransactionReference(),
        );
    }
}
