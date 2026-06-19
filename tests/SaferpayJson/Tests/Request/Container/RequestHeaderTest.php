<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\Container;

use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Container\RequestHeader;
use Ticketpark\SaferpayJson\Request\RequestConfig;

class RequestHeaderTest extends TestCase
{
    public function testAutoGeneratesUuidV4OnFirstTry(): void
    {
        $header = new RequestHeader('customerId');

        $requestId = $header->getRequestId();
        $this->assertNotNull($requestId);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $requestId,
        );
    }

    public function testDoesNotAutoGenerateOnRetry(): void
    {
        $header = new RequestHeader('customerId', null, RequestConfig::MIN_RETRY_INDICATOR + 1);

        $this->assertNull($header->getRequestId());
    }

    public function testUsesProvidedRequestId(): void
    {
        $header = new RequestHeader('customerId', 'my-request-id');

        $this->assertSame('my-request-id', $header->getRequestId());
    }
}
