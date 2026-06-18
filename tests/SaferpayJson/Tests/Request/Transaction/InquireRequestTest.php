<?php

declare(strict_types=1);

namespace SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;
use Ticketpark\SaferpayJson\Response\Transaction\InquireResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTestCase;

class InquireRequestTest extends CommonRequestTestCase
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            InquireResponse::class,
        );
    }

    protected function getInstance()
    {
        return new InquireRequest(
            $this->getRequestConfig(),
            new TransactionReference(),
        );
    }
}
