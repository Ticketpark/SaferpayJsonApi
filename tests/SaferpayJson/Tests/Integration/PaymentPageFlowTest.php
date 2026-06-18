<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;

final class PaymentPageFlowTest extends TestCase
{
    private ?ReturnUrlServer $returnUrlServer = null;

    protected function tearDown(): void
    {
        $this->returnUrlServer?->stop();
    }

    public function testInitializePaymentPageAssertCaptureAndRefund(): void
    {
        $credentials = IntegrationCredentials::tryLoad();
        if (null === $credentials) {
            $this->markTestSkipped('Create example/credentials.php with Saferpay test credentials (copy from credentials.dist.php).');
        }

        $this->assertPlaywrightIsAvailable();

        $this->returnUrlServer = ReturnUrlServer::start();

        $requestConfig = new RequestConfig(
            $credentials->apiKey,
            $credentials->apiSecret,
            $credentials->customerId,
            true,
        );

        $payment = new Payment(new Amount(5_000, 'CHF'));
        $payment->setDescription('SaferpayJsonApi integration test');

        $initializeRequest = new InitializeRequest(
            $requestConfig,
            $credentials->terminalId,
            $payment,
            new ReturnUrl($this->returnUrlServer->getSuccessUrl()),
        );
        $initializeRequest->setPaymentMethods([PaymentMethod::Visa]);

        $initializeResponse = $initializeRequest->execute();

        $token = $initializeResponse->getToken();
        $redirectUrl = $initializeResponse->getRedirectUrl();
        $this->assertNotEmpty($token);
        $this->assertNotEmpty($redirectUrl);

        $this->completePaymentInBrowser($redirectUrl, $this->returnUrlServer->getUrlPrefix());

        $assertResponse = (new AssertRequest($requestConfig, $token))->execute();
        $transactionId = $assertResponse->getTransaction()?->getId();
        $this->assertNotEmpty($transactionId);

        $captureResponse = (new CaptureRequest(
            $requestConfig,
            (new TransactionReference())->setTransactionId($transactionId),
        ))->execute();

        $this->assertSame(TransactionStatus::Captured, $captureResponse->getStatus());
        $captureId = $captureResponse->getCaptureId();
        $this->assertNotEmpty($captureId);

        $refundResponse = (new RefundRequest(
            $requestConfig,
            new Refund(new Amount(2_000, 'CHF')),
            (new CaptureReference())->setCaptureId($captureId),
        ))->execute();

        $this->assertNotEmpty($refundResponse->getTransaction()?->getId());
    }

    private function assertPlaywrightIsAvailable(): void
    {
        $browserDir = dirname(__DIR__, 4).'/example/PaymentPage/browser';
        $playwrightBinary = $browserDir.'/node_modules/playwright/cli.js';

        if (!is_file($playwrightBinary)) {
            $this->markTestSkipped(
                'Playwright is not installed. Run: npm --prefix example/PaymentPage/browser install && npm --prefix example/PaymentPage/browser run install-browsers',
            );
        }
    }

    private function completePaymentInBrowser(string $redirectUrl, string $returnUrlPrefix): void
    {
        $script = dirname(__DIR__, 4).'/example/PaymentPage/browser/complete-payment.mjs';
        $command = sprintf(
            '%s %s %s %s',
            escapeshellarg('node'),
            escapeshellarg($script),
            escapeshellarg($redirectUrl),
            escapeshellarg($returnUrlPrefix),
        );

        $output = [];
        $exitCode = 0;
        exec($command.' 2>&1', $output, $exitCode);

        $this->assertSame(
            0,
            $exitCode,
            'Payment page browser automation failed: '.implode("\n", $output),
        );
    }
}
