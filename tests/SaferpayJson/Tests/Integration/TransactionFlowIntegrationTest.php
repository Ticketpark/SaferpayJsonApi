<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Request\Transaction\InitializeRequest;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;

final class TransactionFlowIntegrationTest extends IntegrationTestCase
{
    public function testInitializeAuthorizeCaptureAndInquire(): void
    {
        $credentials = $this->requireCredentials();
        $this->assertPlaywrightIsAvailable();

        $returnUrlServer = $this->startReturnUrlServer();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $payment = $this->createTestPayment(description: 'SaferpayJsonApi Transaction integration test');
        $payment->setOrderId('txn-flow-'.uniqid());

        $initializeRequest = (new InitializeRequest(
            $requestConfig,
            $credentials->terminalId,
            $payment,
            new ReturnUrl($returnUrlServer->getSuccessUrl()),
        ))
            ->setPayer($this->createTestPayer())
            ->setPaymentMethods([PaymentMethod::Visa, PaymentMethod::Mastercard]);

        $initializeResponse = $this->executeIntegrationRequest($initializeRequest);
        $this->assertTransactionInitializeResponse($initializeResponse);

        $redirectUrl = $initializeResponse->getRedirect()?->getRedirectUrl();
        $this->assertNotEmpty($redirectUrl);
        $this->completePaymentInBrowser($redirectUrl, $returnUrlServer->getUrlPrefix());

        $authorizeResponse = $this->executeIntegrationRequest(
            new AuthorizeRequest($requestConfig, $initializeResponse->getToken()),
        );
        $this->assertAuthorizeResponse($authorizeResponse);

        $transactionId = $authorizeResponse->getTransaction()?->getId();
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
    }
}
