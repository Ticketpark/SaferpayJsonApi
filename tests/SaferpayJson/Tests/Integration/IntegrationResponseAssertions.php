<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use Ticketpark\SaferpayJson\Response\Container\Address;
use Ticketpark\SaferpayJson\Response\Container\Alias;
use Ticketpark\SaferpayJson\Response\Container\Amount;
use Ticketpark\SaferpayJson\Response\Container\AuthenticationResult;
use Ticketpark\SaferpayJson\Response\Container\BankAccount;
use Ticketpark\SaferpayJson\Response\Container\Brand;
use Ticketpark\SaferpayJson\Response\Container\Card;
use Ticketpark\SaferpayJson\Response\Container\CheckResult;
use Ticketpark\SaferpayJson\Response\Container\ChosenPlan;
use Ticketpark\SaferpayJson\Response\Container\CustomPlan;
use Ticketpark\SaferpayJson\Response\Container\Dcc;
use Ticketpark\SaferpayJson\Response\Container\DirectDebit;
use Ticketpark\SaferpayJson\Response\Container\Error;
use Ticketpark\SaferpayJson\Response\Container\FraudPrevention;
use Ticketpark\SaferpayJson\Response\Container\HolderAuthentication;
use Ticketpark\SaferpayJson\Response\Container\InstallmentPlan;
use Ticketpark\SaferpayJson\Response\Container\IssuerReference;
use Ticketpark\SaferpayJson\Response\Container\Liability;
use Ticketpark\SaferpayJson\Response\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Response\Container\Payer;
use Ticketpark\SaferpayJson\Response\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Response\Container\PayPal;
use Ticketpark\SaferpayJson\Response\Container\Redirect;
use Ticketpark\SaferpayJson\Response\Container\RegistrationResult;
use Ticketpark\SaferpayJson\Response\Container\ResponseHeader;
use Ticketpark\SaferpayJson\Response\Container\ThreeDs;
use Ticketpark\SaferpayJson\Response\Container\Tokenization;
use Ticketpark\SaferpayJson\Response\Container\TokenizationTokenPan;
use Ticketpark\SaferpayJson\Response\Container\TokenPan;
use Ticketpark\SaferpayJson\Response\Container\Transaction;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;
use Ticketpark\SaferpayJson\Response\Enum\TransactionType;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse as PaymentPageInitializeResponse;
use Ticketpark\SaferpayJson\Response\Response;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasAssertInsertResponse;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertDirectResponse;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasUpdateResponse;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeDirectResponse;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeReferencedResponse;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeResponse;
use Ticketpark\SaferpayJson\Response\Transaction\CancelResponse;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;
use Ticketpark\SaferpayJson\Response\Transaction\InitializeResponse as TransactionInitializeResponse;
use Ticketpark\SaferpayJson\Response\Transaction\InquireResponse;
use Ticketpark\SaferpayJson\Response\Transaction\RefundResponse;

trait IntegrationResponseAssertions
{
    protected function assertResponseHeader(Response $response): void
    {
        $header = $response->getResponseHeader();
        $this->assertNotNull($header);
        $this->assertResponseHeaderContainer($header);
    }

    protected function assertResponseHeaderContainer(ResponseHeader $header): void
    {
        $this->assertNotEmpty($header->getSpecVersion());
        $this->assertNotEmpty($header->getRequestId());
    }

    protected function assertPaymentPageInitializeResponse(PaymentPageInitializeResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertNotEmpty($response->getToken());
        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getExpiration());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    protected function assertTransactionInitializeResponse(TransactionInitializeResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertNotEmpty($response->getToken());
        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getExpiration());
        $this->assertNotNull($response->getRedirectRequired());

        if (true === $response->getRedirectRequired()) {
            $this->assertRedirectContainer($response->getRedirect(), true);
        } else {
            $this->assertRedirectContainer($response->getRedirect(), false);
        }

        $this->assertOptionalBool($response->getLiabilityShift());
    }

    protected function assertAuthorizeResponse(AuthorizeResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertPaymentTransaction($response->getTransaction(), TransactionStatus::Authorized);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertPayerContainer($response->getPayer());
        $this->assertRegistrationResultContainer($response->getRegistrationResult());
        $this->assertMastercardIssuerInstallmentsContainer($response->getMastercardIssuerInstallments());
        $this->assertFraudPreventionContainer($response->getFraudPrevention());
        $this->assertLiabilityContainer($response->getLiability());
        $this->assertDccContainer($response->getDcc());
    }

    protected function assertAssertResponse(AssertResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertPaymentTransaction($response->getTransaction(), TransactionStatus::Authorized);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertPayerContainer($response->getPayer());
        $this->assertRegistrationResultContainer($response->getRegistrationResult());
        $this->assertLiabilityContainer($response->getLiability());
        $this->assertDccContainer($response->getDcc());
        $this->assertMastercardIssuerInstallmentsContainer($response->getMastercardIssuerInstallments());
        $this->assertFraudPreventionContainer($response->getFraudPrevention());
    }

    protected function assertAuthorizeDirectResponse(AuthorizeDirectResponse $response, bool $expectRegistrationResult = false): void
    {
        $this->assertResponseHeader($response);
        $this->assertPaymentTransaction($response->getTransaction(), TransactionStatus::Authorized);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertPayerContainer($response->getPayer());
        $this->assertMastercardIssuerInstallmentsContainer($response->getMastercardIssuerInstallments());
        $this->assertFraudPreventionContainer($response->getFraudPrevention());
        $this->assertLiabilityContainer($response->getLiability());
        $this->assertDccContainer($response->getDcc());

        if ($expectRegistrationResult) {
            $this->assertRegistrationResultContainer($response->getRegistrationResult(), true);
        } else {
            $this->assertRegistrationResultContainer($response->getRegistrationResult());
        }
    }

    protected function assertAuthorizeReferencedResponse(AuthorizeReferencedResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertPaymentTransaction($response->getTransaction(), TransactionStatus::Authorized);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertPayerContainer($response->getPayer());
        $this->assertDccContainer($response->getDcc());
    }

    protected function assertCaptureResponse(CaptureResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertSame(TransactionStatus::Captured, $response->getStatus());
        $this->assertNotEmpty($response->getCaptureId());
        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getDate());
    }

    protected function assertInquireResponse(InquireResponse $response, string $expectedTransactionId, TransactionStatus $expectedStatus): void
    {
        $this->assertResponseHeader($response);
        $this->assertPaymentTransaction($response->getTransaction(), $expectedStatus, $expectedTransactionId);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertPayerContainer($response->getPayer());
        $this->assertLiabilityContainer($response->getLiability());
        $this->assertDccContainer($response->getDcc());
        $this->assertFraudPreventionContainer($response->getFraudPrevention());
    }

    protected function assertRefundResponse(RefundResponse $response): void
    {
        $this->assertResponseHeader($response);

        $transaction = $response->getTransaction();
        $this->assertNotNull($transaction);
        $this->assertSame(TransactionType::Refund, $transaction->getType());
        $this->assertNotNull($transaction->getStatus());
        $this->assertNotEmpty($transaction->getId());
        $this->assertInstanceOf(\DateTimeImmutable::class, $transaction->getDate());
        $this->assertAmountContainer($transaction->getAmount(), true);
        $this->assertNotEmpty($transaction->getSixTransactionReference());
        $this->assertOptionalString($transaction->getCaptureId());
        $this->assertOptionalString($transaction->getOrderId());
        $this->assertOptionalString($transaction->getAcquirerName());
        $this->assertOptionalString($transaction->getAcquirerReference());
        $this->assertOptionalString($transaction->getApprovalCode());
        $this->assertDirectDebitContainer($transaction->getDirectDebit());
        $this->assertIssuerReferenceContainer($transaction->getIssuerReference());

        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertDccContainer($response->getDcc());
    }

    protected function assertCancelResponse(CancelResponse $response, string $expectedTransactionId): void
    {
        $this->assertResponseHeader($response);
        $this->assertSame($expectedTransactionId, $response->getTransactionId());
        $this->assertOptionalString($response->getOrderId());
        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getDate());
    }

    protected function assertAliasInsertResponse(AliasInsertResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertNotEmpty($response->getToken());
        $this->assertInstanceOf(\DateTimeImmutable::class, $response->getExpiration());
        $this->assertNotNull($response->isRedirectRequired());

        if (true === $response->isRedirectRequired()) {
            $this->assertRedirectContainer($response->getRedirect(), true);
        } else {
            $this->assertRedirectContainer($response->getRedirect(), false);
        }
    }

    protected function assertAliasAssertInsertResponse(AliasAssertInsertResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertAliasContainer($response->getAlias(), true);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertCheckResultContainer($response->getCheckResult());
        $this->assertTokenizationContainer($response->getTokenization());
    }

    protected function assertAliasInsertDirectResponse(AliasInsertDirectResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertAliasContainer($response->getAlias(), true);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertCheckResultContainer($response->getCheckResult());
        $this->assertTokenizationContainer($response->getTokenization());
    }

    protected function assertAliasUpdateResponse(AliasUpdateResponse $response): void
    {
        $this->assertResponseHeader($response);
        $this->assertAliasContainer($response->getAlias(), true);
        $this->assertPaymentMeansContainer($response->getPaymentMeans(), true);
        $this->assertTokenizationContainer($response->getTokenization());
    }

    protected function assertAliasDeleteResponse(AliasDeleteResponse $response): void
    {
        $this->assertResponseHeader($response);
    }

    protected function assertPaymentTransaction(
        ?Transaction $transaction,
        TransactionStatus $expectedStatus,
        ?string $expectedId = null,
    ): void {
        $this->assertNotNull($transaction);
        $this->assertSame(TransactionType::Payment, $transaction->getType());
        $this->assertSame($expectedStatus, $transaction->getStatus());
        $this->assertNotEmpty($transaction->getId());

        if (null !== $expectedId) {
            $this->assertSame($expectedId, $transaction->getId());
        }

        $this->assertInstanceOf(\DateTimeImmutable::class, $transaction->getDate());
        $this->assertAmountContainer($transaction->getAmount(), true);
        $this->assertNotEmpty($transaction->getSixTransactionReference());

        $this->assertOptionalString($transaction->getCaptureId());
        $this->assertOptionalString($transaction->getOrderId());
        $this->assertOptionalString($transaction->getAcquirerName());
        $this->assertOptionalString($transaction->getAcquirerReference());
        $this->assertOptionalString($transaction->getApprovalCode());
        $this->assertDirectDebitContainer($transaction->getDirectDebit());
        $this->assertIssuerReferenceContainer($transaction->getIssuerReference());
    }

    protected function assertPaymentMeansContainer(?PaymentMeans $paymentMeans, bool $mandatory = false): void
    {
        if ($mandatory) {
            $this->assertNotNull($paymentMeans);
        }

        if (null === $paymentMeans) {
            return;
        }

        $this->assertBrandContainer($paymentMeans->getBrand(), $mandatory);
        if ($mandatory) {
            $this->assertNotEmpty($paymentMeans->getDisplayText());
        } else {
            $this->assertOptionalString($paymentMeans->getDisplayText());
        }

        if (null !== $paymentMeans->getWallet()) {
            $this->assertInstanceOf(\BackedEnum::class, $paymentMeans->getWallet());
        }

        $this->assertCardContainer($paymentMeans->getCard(), $mandatory);
        $this->assertBankAccountContainer($paymentMeans->getBankAccount());
        $this->assertPayPalContainer($paymentMeans->getPayPal());
    }

    protected function assertBrandContainer(?Brand $brand, bool $mandatory = false): void
    {
        if ($mandatory) {
            $this->assertNotNull($brand);
        }

        if (null === $brand) {
            return;
        }

        $this->assertInstanceOf(\BackedEnum::class, $brand->getPaymentMethod());
        $this->assertNotEmpty($brand->getName());
    }

    protected function assertCardContainer(?Card $card, bool $mandatory = false): void
    {
        if ($mandatory) {
            $this->assertNotNull($card);
        }

        if (null === $card) {
            return;
        }

        if ($mandatory) {
            $this->assertNotEmpty($card->getMaskedNumber());
            $this->assertNotNull($card->getExpMonth());
            $this->assertNotNull($card->getExpYear());
        }

        $this->assertOptionalString($card->getHolderName());
        if (null !== $card->getHolderSegment()) {
            $this->assertInstanceOf(\BackedEnum::class, $card->getHolderSegment());
        }
        if (null !== $card->getFundingSource()) {
            $this->assertInstanceOf(\BackedEnum::class, $card->getFundingSource());
        }
        $this->assertOptionalString($card->getCountryCode());
        $this->assertTokenPanContainer($card->getTokenPan());
    }

    protected function assertAmountContainer(?Amount $amount, bool $mandatory = false): void
    {
        if ($mandatory) {
            $this->assertNotNull($amount);
        }

        if (null === $amount) {
            return;
        }

        $this->assertNotNull($amount->getValue());
        $this->assertNotEmpty($amount->getCurrencyCode());
    }

    protected function assertPayerContainer(?Payer $payer): void
    {
        if (null === $payer) {
            return;
        }

        $this->assertOptionalString($payer->getId());
        $this->assertOptionalString($payer->getIpAddress());
        $this->assertOptionalString($payer->getIpLocation());
        $this->assertAddressContainer($payer->getDeliveryAddress());
        $this->assertAddressContainer($payer->getBillingAddress());
    }

    protected function assertAddressContainer(?Address $address): void
    {
        if (null === $address) {
            return;
        }

        $this->assertOptionalString($address->getFirstName());
        $this->assertOptionalString($address->getLastName());
        $this->assertOptionalString($address->getCompany());
        if (null !== $address->getGender()) {
            $this->assertInstanceOf(\BackedEnum::class, $address->getGender());
        }
        $this->assertOptionalString($address->getStreet());
        $this->assertOptionalString($address->getZip());
        $this->assertOptionalString($address->getCity());
        $this->assertOptionalString($address->getCountryCode());
        $this->assertOptionalString($address->getEmail());
        if (null !== $address->getDateOfBirth()) {
            $this->assertInstanceOf(\DateTimeImmutable::class, $address->getDateOfBirth());
        }
        $this->assertOptionalString($address->getStreet2());
        $this->assertOptionalString($address->getCountrySubdivisionCode());
        $this->assertOptionalString($address->getPhone());
        $this->assertOptionalString($address->getVatNumber());
    }

    protected function assertLiabilityContainer(?Liability $liability): void
    {
        if (null === $liability) {
            return;
        }

        $this->assertOptionalBool($liability->isLiabilityShift());
        if (null !== $liability->getLiableEntity()) {
            $this->assertInstanceOf(\BackedEnum::class, $liability->getLiableEntity());
        }
        $this->assertThreeDsContainer($liability->getThreeDs());
        if (null !== $liability->getInPsd2Scope()) {
            $this->assertInstanceOf(\BackedEnum::class, $liability->getInPsd2Scope());
        }
    }

    protected function assertThreeDsContainer(?ThreeDs $threeDs): void
    {
        if (null === $threeDs) {
            return;
        }

        $this->assertOptionalBool($threeDs->isAuthenticated());
        $this->assertOptionalString($threeDs->getXid());
        $this->assertOptionalString($threeDs->getVersion());
        if (null !== $threeDs->getAuthenticationType()) {
            $this->assertInstanceOf(\BackedEnum::class, $threeDs->getAuthenticationType());
        }
    }

    protected function assertRegistrationResultContainer(?RegistrationResult $registrationResult, bool $expectSuccess = false): void
    {
        if (null === $registrationResult) {
            if ($expectSuccess) {
                $this->fail('Expected RegistrationResult container.');
            }

            return;
        }

        $this->assertNotNull($registrationResult->isSuccess());

        if ($expectSuccess) {
            $this->assertTrue($registrationResult->isSuccess());
            $this->assertAliasContainer($registrationResult->getAlias(), true);
        } else {
            $this->assertAliasContainer($registrationResult->getAlias());
            $this->assertErrorContainer($registrationResult->getError());
        }

        $this->assertAuthenticationResultContainer($registrationResult->getAuthenticationResult());
        $this->assertTokenizationContainer($registrationResult->getTokenization());
    }

    protected function assertAuthenticationResultContainer(?AuthenticationResult $authenticationResult): void
    {
        if (null === $authenticationResult) {
            return;
        }

        $this->assertOptionalBool($authenticationResult->isAuthenticated());
        if (null !== $authenticationResult->getAuthenticationType()) {
            $this->assertInstanceOf(\BackedEnum::class, $authenticationResult->getAuthenticationType());
        }
        $this->assertOptionalString($authenticationResult->getMessage());
    }

    protected function assertErrorContainer(?Error $error): void
    {
        if (null === $error) {
            return;
        }

        $this->assertOptionalString($error->getErrorName());
        $this->assertOptionalString($error->getErrorMessage());
    }

    protected function assertDccContainer(?Dcc $dcc): void
    {
        if (null === $dcc) {
            return;
        }

        $this->assertAmountContainer($dcc->getPayerAmount());
        $this->assertOptionalString($dcc->getMarkup());
        $this->assertOptionalString($dcc->getExchangeRate());
    }

    protected function assertFraudPreventionContainer(?FraudPrevention $fraudPrevention): void
    {
        if (null === $fraudPrevention) {
            return;
        }

        if (null !== $fraudPrevention->getResult()) {
            $this->assertInstanceOf(\BackedEnum::class, $fraudPrevention->getResult());
        }
    }

    protected function assertMastercardIssuerInstallmentsContainer(?MastercardIssuerInstallments $installments): void
    {
        if (null === $installments) {
            return;
        }

        foreach ($installments->getInstallmentPlans() as $plan) {
            $this->assertInstallmentPlanContainer($plan);
        }

        $this->assertCustomPlanContainer($installments->getCustomPlan());
        $this->assertOptionalString($installments->getReceiptFreeText());
        $this->assertChosenPlanContainer($installments->getChosenPlan());
    }

    protected function assertInstallmentPlanContainer(InstallmentPlan $plan): void
    {
        $this->assertOptionalInt($plan->getNumberOfInstallments());
        $this->assertOptionalString($plan->getInterestRate());
        $this->assertAmountContainer($plan->getInstallmentFee());
        $this->assertOptionalString($plan->getAnnualPercentageRate());
        $this->assertAmountContainer($plan->getFirstInstallmentAmount());
        $this->assertAmountContainer($plan->getSubsequentInstallmentAmount());
        $this->assertAmountContainer($plan->getTotalAmountDue());
    }

    protected function assertCustomPlanContainer(?CustomPlan $plan): void
    {
        if (null === $plan) {
            return;
        }

        $this->assertOptionalInt($plan->getMinimumNumberOfInstallments());
        $this->assertOptionalInt($plan->getMaximumNumberOfInstallments());
        $this->assertOptionalString($plan->getInterestRate());
        $this->assertAmountContainer($plan->getInstallmentFee());
        $this->assertOptionalString($plan->getAnnualPercentageRate());
        $this->assertAmountContainer($plan->getTotalAmountDue());
    }

    protected function assertChosenPlanContainer(?ChosenPlan $plan): void
    {
        if (null === $plan) {
            return;
        }

        $this->assertOptionalInt($plan->getNumberOfInstallments());
        $this->assertOptionalString($plan->getInterestRate());
        $this->assertAmountContainer($plan->getInstallmentFee());
        $this->assertOptionalString($plan->getAnnualPercentageRate());
        $this->assertAmountContainer($plan->getFirstInstallmentAmount());
        $this->assertAmountContainer($plan->getSubsequentInstallmentAmount());
        $this->assertAmountContainer($plan->getTotalAmountDue());
    }

    protected function assertRedirectContainer(?Redirect $redirect, bool $mandatoryUrl): void
    {
        if ($mandatoryUrl) {
            $this->assertNotNull($redirect);
            $this->assertNotEmpty($redirect->getRedirectUrl());
        } elseif (null !== $redirect) {
            $this->assertOptionalString($redirect->getRedirectUrl());
        }

        if (null === $redirect) {
            return;
        }

        $this->assertOptionalBool($redirect->isPaymentMeansRequired());
    }

    protected function assertAliasContainer(?Alias $alias, bool $mandatoryId = false): void
    {
        if ($mandatoryId) {
            $this->assertNotNull($alias);
            $this->assertNotEmpty($alias->getId());
        } elseif (null !== $alias) {
            $this->assertOptionalString($alias->getId());
        }

        if (null === $alias) {
            return;
        }

        $this->assertOptionalInt($alias->getLifetime());
    }

    protected function assertCheckResultContainer(?CheckResult $checkResult): void
    {
        if (null === $checkResult) {
            return;
        }

        if (null !== $checkResult->getResult()) {
            $this->assertInstanceOf(\BackedEnum::class, $checkResult->getResult());
        }
        $this->assertOptionalString($checkResult->getMessage());
        $this->assertHolderAuthenticationContainer($checkResult->getAuthentication());
    }

    protected function assertHolderAuthenticationContainer(?HolderAuthentication $authentication): void
    {
        if (null === $authentication) {
            return;
        }

        if (null !== $authentication->getResult()) {
            $this->assertInstanceOf(\BackedEnum::class, $authentication->getResult());
        }
        $this->assertOptionalString($authentication->getMessage());
        $this->assertOptionalString($authentication->getXid());
    }

    protected function assertTokenizationContainer(?Tokenization $tokenization): void
    {
        if (null === $tokenization) {
            return;
        }

        $this->assertOptionalString($tokenization->getProgram());
        if (null !== $tokenization->getStatus()) {
            $this->assertInstanceOf(\BackedEnum::class, $tokenization->getStatus());
        }
        $this->assertTokenizationTokenPanContainer($tokenization->getTokenPan());
    }

    protected function assertTokenizationTokenPanContainer(?TokenizationTokenPan $tokenPan): void
    {
        if (null === $tokenPan) {
            return;
        }

        $this->assertOptionalString($tokenPan->getCardImageUrl());
        $this->assertOptionalInt($tokenPan->getExpMonth());
        $this->assertOptionalInt($tokenPan->getExpYear());
        if (null !== $tokenPan->getStatus()) {
            $this->assertInstanceOf(\BackedEnum::class, $tokenPan->getStatus());
        }
    }

    protected function assertTokenPanContainer(?TokenPan $tokenPan): void
    {
        if (null === $tokenPan) {
            return;
        }

        $this->assertOptionalString($tokenPan->getMaskedNumber());
        $this->assertOptionalInt($tokenPan->getExpMonth());
        $this->assertOptionalInt($tokenPan->getExpYear());
    }

    protected function assertBankAccountContainer(?BankAccount $bankAccount): void
    {
        if (null === $bankAccount) {
            return;
        }

        $this->assertOptionalString($bankAccount->getIban());
        $this->assertOptionalString($bankAccount->getHolderName());
        $this->assertOptionalString($bankAccount->getBic());
        $this->assertOptionalString($bankAccount->getBankName());
        $this->assertOptionalString($bankAccount->getCountryCode());
    }

    protected function assertPayPalContainer(?PayPal $payPal): void
    {
        if (null === $payPal) {
            return;
        }

        $this->assertOptionalString($payPal->getPayerId());
        if (null !== $payPal->getSellerProtectionStatus()) {
            $this->assertInstanceOf(\BackedEnum::class, $payPal->getSellerProtectionStatus());
        }
        $this->assertOptionalString($payPal->getEmail());
    }

    protected function assertDirectDebitContainer(?DirectDebit $directDebit): void
    {
        if (null === $directDebit) {
            return;
        }

        $this->assertOptionalString($directDebit->getMandateId());
        $this->assertOptionalString($directDebit->getCreditorId());
    }

    protected function assertIssuerReferenceContainer(?IssuerReference $issuerReference): void
    {
        if (null === $issuerReference) {
            return;
        }

        $this->assertOptionalString($issuerReference->getMastercardTlid());
        $this->assertOptionalString($issuerReference->getTransactionStamp());
        $this->assertOptionalString($issuerReference->getSettlementDate());
    }

    protected function assertOptionalString(?string $value): void
    {
        $this->assertTrue(null === $value || is_string($value));
    }

    protected function assertOptionalBool(?bool $value): void
    {
        $this->assertTrue(null === $value || is_bool($value));
    }

    protected function assertOptionalInt(?int $value): void
    {
        $this->assertTrue(null === $value || is_int($value));
    }
}
