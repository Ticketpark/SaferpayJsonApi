<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Card;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\RequestConfig;

abstract class IntegrationTestCase extends TestCase
{
    use IntegrationRequestAssertions;
    use IntegrationResponseAssertions;

    protected const TEST_CARD_NUMBER = '9010003150000001';
    protected const TEST_CARD_EXP_MONTH = 12;
    protected const TEST_CARD_EXP_YEAR = 2030;
    protected const TEST_CARD_HOLDER = 'Max Mustermann';

    protected ?ReturnUrlServer $returnUrlServer = null;

    protected function tearDown(): void
    {
        $this->returnUrlServer?->stop();
    }

    protected function requireCredentials(): IntegrationCredentials
    {
        $credentials = IntegrationCredentials::tryLoad();
        if (null === $credentials) {
            $this->markTestSkipped('Create example/credentials.php with Saferpay test credentials (copy from credentials.dist.php).');
        }

        return $credentials;
    }

    protected function createTestRequestConfig(IntegrationCredentials $credentials): RequestConfig
    {
        return new RequestConfig(
            $credentials->apiKey,
            $credentials->apiSecret,
            $credentials->customerId,
            true,
        );
    }

    protected function startReturnUrlServer(): ReturnUrlServer
    {
        $this->returnUrlServer = ReturnUrlServer::start();

        return $this->returnUrlServer;
    }

    protected function createTestPayment(int $amountCents = 5_000, string $currency = 'CHF', string $description = 'SaferpayJsonApi integration test'): Payment
    {
        $payment = new Payment(new Amount($amountCents, $currency));
        $payment->setDescription($description);

        return $payment;
    }

    protected function createTestCard(): Card
    {
        return (new Card())
            ->setNumber(self::TEST_CARD_NUMBER)
            ->setExpMonth(self::TEST_CARD_EXP_MONTH)
            ->setExpYear(self::TEST_CARD_EXP_YEAR)
            ->setHolderName(self::TEST_CARD_HOLDER);
    }

    protected function createTestPayer(): Payer
    {
        return (new Payer())
            ->setIpAddress('127.0.0.1')
            ->setLanguageCode('de')
            ->setAcceptHeader('text/html,application/xhtml+xml')
            ->setUserAgent('Mozilla/5.0 SaferpayJsonApiIntegrationTest')
            ->setJavaScriptEnabled(true)
            ->setScreenWidth(1920)
            ->setScreenHeight(1080)
            ->setTimeZoneOffsetMinutes(-60);
    }

    protected function assertPlaywrightIsAvailable(): void
    {
        $browserDir = dirname(__DIR__, 4).'/example/PaymentPage/browser';
        $playwrightBinary = $browserDir.'/node_modules/playwright/cli.js';

        if (!is_file($playwrightBinary)) {
            $this->markTestSkipped(
                'Playwright is not installed. Run: npm --prefix example/PaymentPage/browser install && npm --prefix example/PaymentPage/browser run install-browsers',
            );
        }
    }

    protected function completePaymentInBrowser(string $redirectUrl, string $returnUrlPrefix): void
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
