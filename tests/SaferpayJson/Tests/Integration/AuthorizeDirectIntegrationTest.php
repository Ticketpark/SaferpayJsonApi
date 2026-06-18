<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Enum\AliasIdGenerator;
use Ticketpark\SaferpayJson\Request\Enum\Initiator;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeDirectRequest;

final class AuthorizeDirectIntegrationTest extends IntegrationTestCase
{
    public function testAuthorizeDirectReturnsAuthorizedTransaction(): void
    {
        $credentials = $this->requireCredentials();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $payment = $this->createTestPayment(description: 'SaferpayJsonApi AuthorizeDirect integration test');
        $payment->setOrderId('auth-direct-'.uniqid());

        $request = (new AuthorizeDirectRequest(
            $requestConfig,
            $credentials->terminalId,
            $payment,
            (new PaymentMeans())->setCard($this->createTestCard()),
        ))
            ->setInitiator(Initiator::Merchant)
            ->setPayer($this->createTestPayer());

        $response = $this->executeIntegrationRequest($request);
        $this->assertAuthorizeDirectResponse($response);
    }

    public function testAuthorizeDirectWithRegisterAliasSucceeds(): void
    {
        $credentials = $this->requireCredentials();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $request = (new AuthorizeDirectRequest(
            $requestConfig,
            $credentials->terminalId,
            $this->createTestPayment(description: 'SaferpayJsonApi AuthorizeDirect alias integration test'),
            (new PaymentMeans())->setCard($this->createTestCard()),
        ))
            ->setInitiator(Initiator::Merchant)
            ->setRegisterAlias(new RegisterAlias(AliasIdGenerator::Random))
            ->setPayer($this->createTestPayer());

        $response = $this->executeIntegrationRequest($request);
        $this->assertAuthorizeDirectResponse($response, true);
    }
}
