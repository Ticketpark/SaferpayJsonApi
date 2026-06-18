<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests;

use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Request\Enum\Wallet;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Enum\ErrorBehaviour;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;
use Ticketpark\SaferpayJson\SerializerFactory;

class SerializationTest extends TestCase
{
    public function testAmountRoundTrip(): void
    {
        $serializer = SerializerFactory::get();
        $amount = new Amount(5000, 'CHF');

        $json = $serializer->serialize($amount, 'json');
        $restored = $serializer->deserialize($json, Amount::class, 'json');

        $this->assertSame(5000, $restored->getValue());
        $this->assertSame('CHF', $restored->getCurrencyCode());
    }

    public function testRefundRequestSerializesMandatoryContainers(): void
    {
        $request = new RefundRequest(
            new RequestConfig('apiKey', 'apiSecret', 'customerId'),
            new Refund(new Amount(5000, 'CHF')),
            new CaptureReference(),
        );

        $data = json_decode(SerializerFactory::get()->serialize($request, 'json'), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame('customerId', $data['RequestHeader']['CustomerId']);
        $this->assertSame(5000, $data['Refund']['Amount']['Value']);
        $this->assertSame('CHF', $data['Refund']['Amount']['CurrencyCode']);
    }

    public function testInitializeRequestSerializesEnums(): void
    {
        $request = new InitializeRequest(
            new RequestConfig('apiKey', 'apiSecret', 'customerId'),
            'terminal-id',
            new Payment(new Amount(5000, 'CHF')),
            new ReturnUrl('https://example.com/return'),
        );
        $request->setPaymentMethods([PaymentMethod::Visa, PaymentMethod::Mastercard]);
        $request->setWallets([Wallet::ApplePay]);

        $data = json_decode(SerializerFactory::get()->serialize($request, 'json'), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame(['VISA', 'MASTERCARD'], $data['PaymentMethods']);
        $this->assertSame(['APPLEPAY'], $data['Wallets']);
    }

    public function testCaptureResponseDeserializesDateTimeImmutable(): void
    {
        $serializer = SerializerFactory::get();
        $json = '{"Date":"2024-06-18T10:15:30.123456+00:00","Status":"CAPTURED"}';

        $response = $serializer->deserialize($json, CaptureResponse::class, 'json');

        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getDate());
        $this->assertSame(TransactionStatus::Captured, $response->getStatus());

        $roundTrip = $serializer->deserialize(
            $serializer->serialize($response, 'json'),
            CaptureResponse::class,
            'json',
        );

        $this->assertInstanceOf(\DateTimeImmutable::class, $roundTrip->getDate());
        $this->assertSame(TransactionStatus::Captured, $roundTrip->getStatus());
    }

    public function testErrorResponseDeserializesErrorBehaviour(): void
    {
        $serializer = SerializerFactory::get();
        $json = '{"Behavior":"DO_NOT_RETRY","ErrorName":"VALIDATION_FAILED","ErrorMessage":"Invalid request"}';

        $response = $serializer->deserialize($json, ErrorResponse::class, 'json');

        $this->assertSame(ErrorBehaviour::DoNotRetry, $response->getBehaviour());
    }
}
