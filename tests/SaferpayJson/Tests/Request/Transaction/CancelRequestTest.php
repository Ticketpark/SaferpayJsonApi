<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Response\Transaction\CancelResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class CancelRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            CancelResponse::class,
        );
    }

    public function getInstance()
    {
        return new CancelRequest(
            $this->getRequestConfig(),
            new TransactionReference(),
        );
    }
}
