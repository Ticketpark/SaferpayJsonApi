<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Request\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\Enum\AliasIdGenerator;
use Ticketpark\SaferpayJson\Request\Enum\AliasInsertType;
use Ticketpark\SaferpayJson\Request\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasUpdateRequest;

final class SecureCardDataFlowIntegrationTest extends IntegrationTestCase
{
    public function testAliasInsertDirectUpdateAndDelete(): void
    {
        $credentials = $this->requireCredentials();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $insertResponse = $this->executeIntegrationRequest(new AliasInsertDirectRequest(
            $requestConfig,
            new RegisterAlias(AliasIdGenerator::Random),
            (new PaymentMeans())->setCard($this->createTestCard()),
        ));
        $this->assertAliasInsertDirectResponse($insertResponse);

        $aliasId = $insertResponse->getAlias()?->getId();
        $this->assertNotEmpty($aliasId);

        $updateResponse = $this->executeIntegrationRequest(new AliasUpdateRequest(
            $requestConfig,
            new UpdateAlias($aliasId),
            new UpdatePaymentMeans($this->createTestCard()->setHolderName('Updated Holder')),
        ));
        $this->assertAliasUpdateResponse($updateResponse);

        $deleteResponse = $this->executeIntegrationRequest(new AliasDeleteRequest($requestConfig, $aliasId));
        $this->assertAliasDeleteResponse($deleteResponse);
    }

    public function testAliasInsertAssertInsertUpdateAndDelete(): void
    {
        $credentials = $this->requireCredentials();
        $this->assertPlaywrightIsAvailable();

        $returnUrlServer = $this->startReturnUrlServer();
        $requestConfig = $this->createTestRequestConfig($credentials);

        $insertRequest = (new AliasInsertRequest(
            $requestConfig,
            new RegisterAlias(AliasIdGenerator::Random),
            AliasInsertType::Card,
            new ReturnUrl($returnUrlServer->getSuccessUrl()),
        ))
            ->setLanguageCode('de')
            ->setPaymentMethods([PaymentMethod::Visa, PaymentMethod::Mastercard]);

        $insertResponse = $this->executeIntegrationRequest($insertRequest);
        $this->assertAliasInsertResponse($insertResponse);

        $redirectUrl = $insertResponse->getRedirect()?->getRedirectUrl();
        $this->assertNotEmpty($redirectUrl);
        $this->completePaymentInBrowser($redirectUrl, $returnUrlServer->getUrlPrefix());

        $assertResponse = $this->executeIntegrationRequest(
            new AliasAssertInsertRequest($requestConfig, $insertResponse->getToken()),
        );
        $this->assertAliasAssertInsertResponse($assertResponse);

        $aliasId = $assertResponse->getAlias()?->getId();
        $this->assertNotEmpty($aliasId);

        $updateResponse = $this->executeIntegrationRequest(new AliasUpdateRequest(
            $requestConfig,
            new UpdateAlias($aliasId),
            new UpdatePaymentMeans($this->createTestCard()->setHolderName('Updated Holder')),
        ));
        $this->assertAliasUpdateResponse($updateResponse);

        $deleteResponse = $this->executeIntegrationRequest(new AliasDeleteRequest($requestConfig, $aliasId));
        $this->assertAliasDeleteResponse($deleteResponse);
    }
}
