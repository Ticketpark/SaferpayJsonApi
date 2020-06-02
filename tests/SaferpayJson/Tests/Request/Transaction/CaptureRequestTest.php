<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Transaction;

use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;

class CaptureRequestTest extends CommonRequestTest
{
    public function testSuccessfulResponse(): void
    {
        parent::doTestSuccessfulResponse(
            CaptureResponse::class
        );
    }

    public function getInstance()
    {
        return new CaptureRequest(
            $this->getRequestConfig(),
            new TransactionReference()
        );
    }
}
