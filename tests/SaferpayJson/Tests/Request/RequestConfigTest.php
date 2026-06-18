<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Psr7\Utils as GuzzleUtils;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Response\Transaction\CancelResponse;
use Ticketpark\SaferpayJson\SerializerFactory;

class RequestConfigTest extends TestCase
{
    public function testGetSerializerDefaultsToFactory(): void
    {
        $config = new RequestConfig('apiKey', 'apiSecret', 'customerId');

        $this->assertSame(SerializerFactory::get(), $config->getSerializer());
    }

    public function testSetSerializerReturnsInjectedInstance(): void
    {
        $serializer = $this->createMock(SerializerInterface::class);

        $config = new RequestConfig('apiKey', 'apiSecret', 'customerId');

        $this->assertSame($config, $config->setSerializer($serializer));
        $this->assertSame($serializer, $config->getSerializer());
    }

    public function testRequestUsesInjectedSerializer(): void
    {
        $serializer = $this->createMock(SerializerInterface::class);
        $serializer->expects($this->once())
            ->method('serialize')
            ->willReturn('{}');
        $serializer->expects($this->once())
            ->method('deserialize')
            ->willReturn(new CancelResponse());

        $client = $this->createMock(Client::class);
        $client->expects($this->once())
            ->method('post')
            ->willReturn(new GuzzleResponse(200, [], GuzzleUtils::streamFor('{}')));

        $requestConfig = new RequestConfig('apiKey', 'apiSecret', 'customerId');
        $requestConfig->setClient($client);
        $requestConfig->setSerializer($serializer);

        $request = new CancelRequest(
            $requestConfig,
            new TransactionReference(),
        );

        $response = $request->execute();

        $this->assertInstanceOf(CancelResponse::class, $response);
    }
}
