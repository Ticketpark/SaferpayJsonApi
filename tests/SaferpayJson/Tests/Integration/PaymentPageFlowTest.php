<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;

final class PaymentPageFlowTest extends IntegrationTestCase
{
    public function testInitializePaymentPageAssertCaptureRefundAndInquire(): void
    {
        $credentials = $this->requireCredentials();
        $this->assertPlaywrightIsAvailable();

        $returnUrlServer = $this->startReturnUrlServer();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $payment = $this->createTestPayment();
        $payment->setOrderId('pp-flow-'.uniqid());

        $initializeRequest = (new InitializeRequest(
            $requestConfig,
            $credentials->terminalId,
            $payment,
            new ReturnUrl($returnUrlServer->getSuccessUrl()),
        ))
            ->setPaymentMethods([PaymentMethod::Visa])
            ->setPayer($this->createTestPayer());

        $initializeResponse = $this->executeIntegrationRequest($initializeRequest);
        $this->assertPaymentPageInitializeResponse($initializeResponse);
        $this->completePaymentInBrowser($initializeResponse->getRedirectUrl(), $returnUrlServer->getUrlPrefix());

        $assertResponse = $this->executeIntegrationRequest(
            new AssertRequest($requestConfig, $initializeResponse->getToken()),
        );
        $this->assertAssertResponse($assertResponse);

        $transactionId = $assertResponse->getTransaction()?->getId();
        $this->assertNotEmpty($transactionId);

        $captureResponse = $this->executeIntegrationRequest(new CaptureRequest(
            $requestConfig,
            (new TransactionReference())->setTransactionId($transactionId),
        ));
        $this->assertCaptureResponse($captureResponse);
        $captureId = $captureResponse->getCaptureId();

        $inquireResponse = $this->executeIntegrationRequest(new InquireRequest(
            $requestConfig,
            (new TransactionReference())->setTransactionId($transactionId),
        ));
        $this->assertInquireResponse($inquireResponse, $transactionId, TransactionStatus::Captured);
        $this->assertSame($captureId, $inquireResponse->getTransaction()?->getCaptureId());

        $refund = (new Refund(new Amount(2_000, 'CHF')))
            ->setDescription('SaferpayJsonApi integration partial refund');

        $refundResponse = $this->executeIntegrationRequest(new RefundRequest(
            $requestConfig,
            $refund,
            (new CaptureReference())->setCaptureId($captureId),
        ));
        $this->assertRefundResponse($refundResponse);
    }
}
