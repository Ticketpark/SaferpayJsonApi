<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\Recurring;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Enum\Initiator;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeDirectRequest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;

final class TransactionLifecycleIntegrationTest extends IntegrationTestCase
{
    public function testCancelAuthorizedTransaction(): void
    {
        $credentials = $this->requireCredentials();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $authorizeResponse = $this->executeIntegrationRequest(
            (new AuthorizeDirectRequest(
                $requestConfig,
                $credentials->terminalId,
                $this->createTestPayment(description: 'SaferpayJsonApi Cancel integration test'),
                (new PaymentMeans())->setCard($this->createTestCard()),
            ))
                ->setInitiator(Initiator::Merchant)
                ->setPayer($this->createTestPayer()),
        );
        $this->assertAuthorizeDirectResponse($authorizeResponse);

        $transactionId = $authorizeResponse->getTransaction()?->getId();
        $this->assertNotEmpty($transactionId);

        $cancelResponse = $this->executeIntegrationRequest(new CancelRequest(
            $requestConfig,
            (new TransactionReference())->setTransactionId($transactionId),
        ));
        $this->assertCancelResponse($cancelResponse, $transactionId);
    }

    public function testAuthorizeReferencedAfterInitialRecurringCapture(): void
    {
        $credentials = $this->requireCredentials();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $initialPayment = $this->createTestPayment(description: 'SaferpayJsonApi AuthorizeReferenced initial');
        $initialPayment->setRecurring(new Recurring(true));

        $initialResponse = $this->executeIntegrationRequest(
            (new AuthorizeDirectRequest(
                $requestConfig,
                $credentials->terminalId,
                $initialPayment,
                (new PaymentMeans())->setCard($this->createTestCard()),
            ))
                ->setInitiator(Initiator::Merchant)
                ->setPayer($this->createTestPayer()),
        );
        $this->assertAuthorizeDirectResponse($initialResponse);

        $initialTransactionId = $initialResponse->getTransaction()?->getId();
        $this->assertNotEmpty($initialTransactionId);

        $captureResponse = $this->executeIntegrationRequest(new CaptureRequest(
            $requestConfig,
            (new TransactionReference())->setTransactionId($initialTransactionId),
        ));
        $this->assertCaptureResponse($captureResponse);

        $followUpPayment = $this->createTestPayment(description: 'SaferpayJsonApi AuthorizeReferenced follow-up');
        $followUpPayment->setRecurring(new Recurring(false));

        $referencedResponse = $this->executeIntegrationRequest(new AuthorizeReferencedRequest(
            $requestConfig,
            $credentials->terminalId,
            $followUpPayment,
            (new TransactionReference())->setTransactionId($initialTransactionId),
        ));
        $this->assertAuthorizeReferencedResponse($referencedResponse);
    }
}
