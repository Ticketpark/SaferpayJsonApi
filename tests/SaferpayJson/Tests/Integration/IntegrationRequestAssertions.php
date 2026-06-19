<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

use BackedEnum;
use Ticketpark\SaferpayJson\Request\Container\Address;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\Card;
use Ticketpark\SaferpayJson\Request\Container\CardForm;
use Ticketpark\SaferpayJson\Request\Container\IssuerReference;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Request\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest as PaymentPageAssertRequest;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest as PaymentPageInitializeRequest;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasUpdateRequest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeDirectRequest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CancelRequest;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Request\Transaction\InitializeRequest as TransactionInitializeRequest;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;
use Ticketpark\SaferpayJson\Response\Response;
use Ticketpark\SaferpayJson\SerializerFactory;

trait IntegrationRequestAssertions
{
    protected function executeIntegrationRequest(Request $request): Response
    {
        $this->assertIntegrationRequest($request);

        return $request->execute();
    }

    protected function assertIntegrationRequest(Request $request): void
    {
        match (true) {
            $request instanceof PaymentPageInitializeRequest => $this->assertPaymentPageInitializeRequest($request),
            $request instanceof PaymentPageAssertRequest => $this->assertPaymentPageAssertRequest($request),
            $request instanceof TransactionInitializeRequest => $this->assertTransactionInitializeRequest($request),
            $request instanceof AuthorizeRequest => $this->assertAuthorizeRequest($request),
            $request instanceof AuthorizeDirectRequest => $this->assertAuthorizeDirectRequest($request),
            $request instanceof AuthorizeReferencedRequest => $this->assertAuthorizeReferencedRequest($request),
            $request instanceof CaptureRequest => $this->assertCaptureRequest($request),
            $request instanceof InquireRequest => $this->assertInquireRequestPayload($request),
            $request instanceof RefundRequest => $this->assertRefundRequestPayload($request),
            $request instanceof CancelRequest => $this->assertCancelRequestPayload($request),
            $request instanceof AliasInsertRequest => $this->assertAliasInsertRequestPayload($request),
            $request instanceof AliasAssertInsertRequest => $this->assertAliasAssertInsertRequestPayload($request),
            $request instanceof AliasInsertDirectRequest => $this->assertAliasInsertDirectRequestPayload($request),
            $request instanceof AliasUpdateRequest => $this->assertAliasUpdateRequestPayload($request),
            $request instanceof AliasDeleteRequest => $this->assertAliasDeleteRequestPayload($request),
            default => $this->fail('Unsupported request type for integration assertions: '.$request::class),
        };
    }

    /** @return array<string, mixed> */
    protected function serializeRequestToArray(Request $request): array
    {
        return json_decode(
            SerializerFactory::get()->serialize($request, 'json'),
            true,
            512,
            JSON_THROW_ON_ERROR,
        );
    }

    protected function assertPaymentPageInitializeRequest(PaymentPageInitializeRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TerminalId', 'Payment', 'ReturnUrl']);
        $this->assertSame($request->getTerminalId(), $data['TerminalId']);
        $this->assertPaymentJson($data['Payment'], $request->getPayment(), true);
        $this->assertReturnUrlJson($data['ReturnUrl'], $request->getReturnUrl());

        $this->assertOptionalStringJsonKey($data, 'ConfigSet', $request->getConfigSet());
        $this->assertEnumListJsonKey($data, 'PaymentMethods', $request->getPaymentMethods());
        $this->assertEnumListJsonKey($data, 'Wallets', $request->getWallets());
        $this->assertOptionalEnumJsonKey($data, 'Condition', $request->getCondition());
        $this->assertRequestPayerContainer($request->getPayer());
        $this->assertJsonKeyPresentWhenSet($data, 'Payer', $request->getPayer());
        if (null !== $request->getPayer()) {
            $this->assertRequestPayerJson($data['Payer'], $request->getPayer());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'RegisterAlias', $request->getRegisterAlias());
        if (null !== $request->getRegisterAlias()) {
            $this->assertRegisterAliasJson($data['RegisterAlias'], $request->getRegisterAlias());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'Authentication', $request->getAuthentication());
        if (null !== $request->getAuthentication()) {
            $this->assertAuthenticationJson($data['Authentication'], $request->getAuthentication());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'CardForm', $request->getCardForm());
        if (null !== $request->getCardForm()) {
            $this->assertCardFormJson($data['CardForm'], $request->getCardForm());
        }
    }

    protected function assertPaymentPageAssertRequest(PaymentPageAssertRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['Token']);
        $this->assertSame($request->getToken(), $data['Token']);
    }

    protected function assertTransactionInitializeRequest(TransactionInitializeRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TerminalId', 'Payment', 'ReturnUrl']);
        $this->assertSame($request->getTerminalId(), $data['TerminalId']);
        $this->assertPaymentJson($data['Payment'], $request->getPayment(), true);
        $this->assertReturnUrlJson($data['ReturnUrl'], $request->getReturnUrl());

        $this->assertOptionalStringJsonKey($data, 'ConfigSet', $request->getConfigSet());
        $this->assertEnumListJsonKey($data, 'PaymentMethods', $request->getPaymentMethods());
        $this->assertRequestPayerContainer($request->getPayer());
        $this->assertJsonKeyPresentWhenSet($data, 'Payer', $request->getPayer());
        if (null !== $request->getPayer()) {
            $this->assertRequestPayerJson($data['Payer'], $request->getPayer());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'PaymentMeans', $request->getPaymentMeans());
        if (null !== $request->getPaymentMeans()) {
            $this->assertPaymentMeansJson($data['PaymentMeans'], $request->getPaymentMeans());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'Authentication', $request->getAuthentication());
        if (null !== $request->getAuthentication()) {
            $this->assertAuthenticationJson($data['Authentication'], $request->getAuthentication());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'CardForm', $request->getCardForm());
        if (null !== $request->getCardForm()) {
            $this->assertCardFormJson($data['CardForm'], $request->getCardForm());
        }
    }

    protected function assertAuthorizeRequest(AuthorizeRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['Token']);
        $this->assertSame($request->getToken(), $data['Token']);
        $this->assertOptionalEnumJsonKey($data, 'Condition', $request->getCondition());
        $this->assertJsonKeyPresentWhenSet($data, 'RegisterAlias', $request->getRegisterAlias());
        if (null !== $request->getRegisterAlias()) {
            $this->assertRegisterAliasJson($data['RegisterAlias'], $request->getRegisterAlias());
        }
    }

    protected function assertAuthorizeDirectRequest(AuthorizeDirectRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TerminalId', 'Payment', 'PaymentMeans']);
        $this->assertSame($request->getTerminalId(), $data['TerminalId']);
        $this->assertPaymentJson($data['Payment'], $request->getPayment(), true);
        $this->assertPaymentMeansJson($data['PaymentMeans'], $request->getPaymentMeans());

        $this->assertOptionalEnumJsonKey($data, 'Initiator', $request->getInitiator());
        $this->assertRequestPayerContainer($request->getPayer());
        $this->assertJsonKeyPresentWhenSet($data, 'Payer', $request->getPayer());
        if (null !== $request->getPayer()) {
            $this->assertRequestPayerJson($data['Payer'], $request->getPayer());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'RegisterAlias', $request->getRegisterAlias());
        if (null !== $request->getRegisterAlias()) {
            $this->assertRegisterAliasJson($data['RegisterAlias'], $request->getRegisterAlias());
        }
        $this->assertJsonKeyPresentWhenSet($data, 'Authentication', $request->getAuthentication());
        if (null !== $request->getAuthentication()) {
            $this->assertAuthenticationJson($data['Authentication'], $request->getAuthentication());
        }
    }

    protected function assertAuthorizeReferencedRequest(AuthorizeReferencedRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TerminalId', 'Payment', 'TransactionReference']);
        $this->assertSame($request->getTerminalId(), $data['TerminalId']);
        $this->assertPaymentJson($data['Payment'], $request->getPayment(), true);
        $this->assertTransactionReferenceJson($data['TransactionReference'], $request->getTransactionReference(), true);

        $this->assertOptionalBoolJsonKey($data, 'SuppressDcc', $request->isSuppressDcc());
        $this->assertJsonKeyPresentWhenSet($data, 'Authentication', $request->getAuthentication());
        if (null !== $request->getAuthentication()) {
            $this->assertAuthenticationJson($data['Authentication'], $request->getAuthentication());
        }
    }

    protected function assertCaptureRequest(CaptureRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TransactionReference']);
        $this->assertTransactionReferenceJson($data['TransactionReference'], $request->getTransactionReference(), true);

        $this->assertJsonKeyPresentWhenSet($data, 'Amount', $request->getAmount());
        if (null !== $request->getAmount()) {
            $this->assertAmountJson($data['Amount'], $request->getAmount(), true);
        }
    }

    protected function assertInquireRequestPayload(InquireRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TransactionReference']);
        $this->assertTransactionReferenceJson($data['TransactionReference'], $request->getTransactionReference(), true);
    }

    protected function assertRefundRequestPayload(RefundRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['Refund', 'CaptureReference']);
        $this->assertRefundJson($data['Refund'], $request->getRefund(), true);
        $this->assertCaptureReferenceJson($data['CaptureReference'], $request->getCaptureReference(), true);
    }

    protected function assertCancelRequestPayload(CancelRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['TransactionReference']);
        $this->assertTransactionReferenceJson($data['TransactionReference'], $request->getTransactionReference(), true);
    }

    protected function assertAliasInsertRequestPayload(AliasInsertRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['RegisterAlias', 'Type', 'ReturnUrl']);
        $this->assertRegisterAliasJson($data['RegisterAlias'], $request->getRegisterAlias());
        $this->assertSame($request->getType()->value, $data['Type']);
        $this->assertReturnUrlJson($data['ReturnUrl'], $request->getReturnUrl());

        $this->assertOptionalStringJsonKey($data, 'LanguageCode', $request->getLanguageCode());
        $this->assertEnumListJsonKey($data, 'PaymentMethods', $request->getPaymentMethods());
        $this->assertJsonKeyPresentWhenSet($data, 'CardForm', $request->getCardForm());
        if (null !== $request->getCardForm()) {
            $this->assertCardFormJson($data['CardForm'], $request->getCardForm());
        }
    }

    protected function assertAliasAssertInsertRequestPayload(AliasAssertInsertRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['Token']);
        $this->assertSame($request->getToken(), $data['Token']);
    }

    protected function assertAliasInsertDirectRequestPayload(AliasInsertDirectRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['RegisterAlias', 'PaymentMeans']);
        $this->assertRegisterAliasJson($data['RegisterAlias'], $request->getRegisterAlias());
        $this->assertPaymentMeansJson($data['PaymentMeans'], $request->getPaymentMeans());
    }

    protected function assertAliasUpdateRequestPayload(AliasUpdateRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['UpdateAlias', 'UpdatePaymentMeans']);
        $this->assertUpdateAliasJson($data['UpdateAlias'], $request->getUpdateAlias());
        $this->assertPaymentMeansJson($data['UpdatePaymentMeans'], $request->getUpdatePaymentMeans());
    }

    protected function assertAliasDeleteRequestPayload(AliasDeleteRequest $request): void
    {
        $data = $this->serializeRequestToArray($request);

        $this->assertRequestHeaderJson($data, $request->getRequestConfig()->getCustomerId());
        $this->assertJsonHasKeys($data, ['AliasId']);
        $this->assertSame($request->getAliasId(), $data['AliasId']);
    }

    /** @param array<string, mixed> $data */
    protected function assertRequestHeaderJson(array $data, string $customerId): void
    {
        $this->assertJsonHasKeys($data, ['RequestHeader']);
        $header = $data['RequestHeader'];
        $this->assertIsArray($header);
        $this->assertJsonHasKeys($header, ['SpecVersion', 'CustomerId', 'RetryIndicator']);
        $this->assertSame('1.52', $header['SpecVersion']);
        $this->assertSame($customerId, $header['CustomerId']);
        $this->assertIsInt($header['RetryIndicator']);
        $this->assertArrayHasKey('RequestId', $header);
        $this->assertNotEmpty($header['RequestId']);
    }

    /** @param array<string, mixed> $data */
    protected function assertPaymentJson(array $data, Payment $payment, bool $amountMandatory): void
    {
        $this->assertJsonHasKeys($data, ['Amount']);
        $this->assertAmountJson($data['Amount'], $payment->getAmount(), $amountMandatory);
        $this->assertOptionalStringJsonKey($data, 'OrderId', $payment->getOrderId());
        $this->assertOptionalStringJsonKey($data, 'Description', $payment->getDescription());
        $this->assertOptionalStringJsonKey($data, 'PayerNote', $payment->getPayerNote());
        $this->assertOptionalStringJsonKey($data, 'MandateId', $payment->getMandateId());
        $this->assertJsonKeyPresentWhenSet($data, 'Recurring', $payment->getRecurring());
        if (null !== $payment->getRecurring()) {
            $this->assertSame($payment->getRecurring()->isInitial(), $data['Recurring']['Initial']);
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertAmountJson(array $data, Amount $amount, bool $mandatory): void
    {
        if ($mandatory) {
            $this->assertJsonHasKeys($data, ['Value', 'CurrencyCode']);
        }
        $this->assertSame($amount->getValue(), $data['Value']);
        $this->assertSame($amount->getCurrencyCode(), $data['CurrencyCode']);
    }

    /** @param array<string, mixed> $data */
    protected function assertReturnUrlJson(array $data, ReturnUrl $returnUrl): void
    {
        $this->assertJsonHasKeys($data, ['Url']);
        $this->assertSame($returnUrl->getUrl(), $data['Url']);
    }

    /** @param array<string, mixed> $data */
    protected function assertTransactionReferenceJson(array $data, TransactionReference $reference, bool $requireOneIdentifier): void
    {
        $this->assertOptionalStringJsonKey($data, 'TransactionId', $reference->getTransactionId());
        $this->assertOptionalStringJsonKey($data, 'OrderId', $reference->getOrderId());

        if ($requireOneIdentifier) {
            $this->assertTrue(
                null !== $reference->getTransactionId() || null !== $reference->getOrderId(),
                'TransactionReference must identify a transaction.',
            );
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertCaptureReferenceJson(array $data, CaptureReference $reference, bool $requireOneIdentifier): void
    {
        $this->assertOptionalStringJsonKey($data, 'CaptureId', $reference->getCaptureId());
        $this->assertOptionalStringJsonKey($data, 'TransactionId', $reference->getTransactionId());
        $this->assertOptionalStringJsonKey($data, 'OrderId', $reference->getOrderId());
        $this->assertOptionalStringJsonKey($data, 'OrderPartId', $reference->getOrderPartId());

        if ($requireOneIdentifier) {
            $this->assertTrue(
                null !== $reference->getCaptureId()
                || null !== $reference->getTransactionId()
                || null !== $reference->getOrderId(),
                'CaptureReference must identify a capture.',
            );
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertRefundJson(array $data, Refund $refund, bool $amountMandatory): void
    {
        $this->assertJsonKeyPresentWhenSet($data, 'Amount', $refund->getAmount());
        if (null !== $refund->getAmount()) {
            $this->assertAmountJson($data['Amount'], $refund->getAmount(), $amountMandatory);
        }
        $this->assertOptionalStringJsonKey($data, 'OrderId', $refund->getOrderId());
        $this->assertOptionalStringJsonKey($data, 'Description', $refund->getDescription());
        $this->assertOptionalStringJsonKey($data, 'PayerNote', $refund->getPayerNote());
        $this->assertOptionalBoolJsonKey($data, 'RestrictRefundAmountToCapturedAmount', $refund->isRestrictRefundAmountToCapturedAmount());
    }

    /** @param array<string, mixed> $data */
    protected function assertRegisterAliasJson(array $data, RegisterAlias $registerAlias): void
    {
        $this->assertJsonHasKeys($data, ['IdGenerator']);
        $this->assertSame($registerAlias->getIdGenerator()->value, $data['IdGenerator']);
        $this->assertOptionalStringJsonKey($data, 'Id', $registerAlias->getId());
        $this->assertOptionalIntJsonKey($data, 'Lifetime', $registerAlias->getLifetime());
    }

    /** @param array<string, mixed> $data */
    protected function assertUpdateAliasJson(array $data, UpdateAlias $updateAlias): void
    {
        $this->assertJsonHasKeys($data, ['Id']);
        $this->assertSame($updateAlias->getId(), $data['Id']);
        $this->assertOptionalIntJsonKey($data, 'Lifetime', $updateAlias->getLifetime());
    }

    /** @param array<string, mixed> $data */
    protected function assertPaymentMeansJson(array $data, PaymentMeans|UpdatePaymentMeans $paymentMeans): void
    {
        $card = $paymentMeans instanceof UpdatePaymentMeans
            ? $paymentMeans->getCard()
            : $paymentMeans->getCard();

        $this->assertJsonKeyPresentWhenSet($data, 'Card', $card);
        if (null !== $card) {
            $this->assertRequestCardJson($data['Card'], $card);
        }

        if ($paymentMeans instanceof PaymentMeans) {
            $this->assertJsonKeyPresentWhenSet($data, 'Alias', $paymentMeans->getAlias());
            $this->assertJsonKeyPresentWhenSet($data, 'BankAccount', $paymentMeans->getBankAccount());
            $this->assertJsonKeyPresentWhenSet($data, 'ApplePay', $paymentMeans->getApplePay());
            $this->assertJsonKeyPresentWhenSet($data, 'GooglePay', $paymentMeans->getGooglePay());
            $this->assertJsonKeyPresentWhenSet($data, 'SchemeToken', $paymentMeans->getSchemeToken());
            $this->assertJsonKeyPresentWhenSet($data, 'SaferpayFields', $paymentMeans->getSaferpayFields());
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertRequestCardJson(array $data, Card $card): void
    {
        $this->assertOptionalStringJsonKey($data, 'Number', $card->getNumber());
        $this->assertOptionalIntJsonKey($data, 'ExpMonth', $card->getExpMonth());
        $this->assertOptionalIntJsonKey($data, 'ExpYear', $card->getExpYear());
        $this->assertOptionalStringJsonKey($data, 'HolderName', $card->getHolderName());
        $this->assertOptionalStringJsonKey($data, 'VerificationCode', $card->getVerificationCode());
    }

    /** @param array<string, mixed> $data */
    protected function assertAuthenticationJson(array $data, Authentication $authentication): void
    {
        $this->assertOptionalEnumJsonKey($data, 'Exemption', $authentication->getExemption());
        $this->assertOptionalEnumJsonKey($data, 'ThreeDsChallenge', $authentication->getThreeDsChallenge());
        $this->assertJsonKeyPresentWhenSet($data, 'ExternalThreeDS', $authentication->getExternalThreeDS());
        $this->assertJsonKeyPresentWhenSet($data, 'IssuerReference', $authentication->getIssuerReference());
        if (null !== $authentication->getIssuerReference()) {
            $this->assertIssuerReferenceJson($data['IssuerReference'], $authentication->getIssuerReference());
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertIssuerReferenceJson(array $data, IssuerReference $issuerReference): void
    {
        $this->assertJsonHasKeys($data, ['TransactionStamp']);
        $this->assertSame($issuerReference->getTransactionStamp(), $data['TransactionStamp']);
        $this->assertOptionalStringJsonKey($data, 'SettlementDate', $issuerReference->getSettlementDate());
    }

    /** @param array<string, mixed> $data */
    protected function assertCardFormJson(array $data, CardForm $cardForm): void
    {
        $this->assertOptionalEnumJsonKey($data, 'HolderName', $cardForm->getHolderName());
        $this->assertOptionalEnumJsonKey($data, 'VerificationCode', $cardForm->getVerificationCode());
    }

    protected function assertRequestPayerContainer(?Payer $payer): void
    {
        if (null === $payer) {
            return;
        }

        $this->assertOptionalString($payer->getAcceptHeader());
        $this->assertOptionalString($payer->getUserAgent());
        $this->assertOptionalString($payer->getIpAddress());
        $this->assertOptionalString($payer->getIpv6Address());
        $this->assertOptionalString($payer->getLanguageCode());
        $this->assertOptionalString($payer->getColorDepth());
        $this->assertOptionalBool($payer->isJavaEnabled());
        $this->assertOptionalBool($payer->isJavaScriptEnabled());
        $this->assertOptionalInt($payer->getScreenHeight());
        $this->assertOptionalInt($payer->getScreenWidth());
        $this->assertOptionalInt($payer->getTimeZoneOffsetMinutes());
        $this->assertRequestAddressContainer($payer->getBillingAddress());
        $this->assertRequestAddressContainer($payer->getDeliveryAddress());
    }

    /** @param array<string, mixed> $data */
    protected function assertRequestPayerJson(array $data, Payer $payer): void
    {
        $this->assertOptionalStringJsonKey($data, 'AcceptHeader', $payer->getAcceptHeader());
        $this->assertOptionalStringJsonKey($data, 'UserAgent', $payer->getUserAgent());
        $this->assertOptionalStringJsonKey($data, 'IpAddress', $payer->getIpAddress());
        $this->assertOptionalStringJsonKey($data, 'Ipv6Address', $payer->getIpv6Address());
        $this->assertOptionalStringJsonKey($data, 'LanguageCode', $payer->getLanguageCode());
        $this->assertOptionalStringJsonKey($data, 'ColorDepth', $payer->getColorDepth());
        $this->assertOptionalBoolJsonKey($data, 'JavaEnabled', $payer->isJavaEnabled());
        $this->assertOptionalBoolJsonKey($data, 'JavaScriptEnabled', $payer->isJavaScriptEnabled());
        $this->assertOptionalIntJsonKey($data, 'ScreenHeight', $payer->getScreenHeight());
        $this->assertOptionalIntJsonKey($data, 'ScreenWidth', $payer->getScreenWidth());
        $this->assertOptionalIntJsonKey($data, 'TimeZoneOffsetMinutes', $payer->getTimeZoneOffsetMinutes());
        $this->assertOptionalStringJsonKey($data, 'Id', $payer->getId());
        $this->assertJsonKeyPresentWhenSet($data, 'BillingAddress', $payer->getBillingAddress());
        $this->assertJsonKeyPresentWhenSet($data, 'DeliveryAddress', $payer->getDeliveryAddress());
    }

    protected function assertRequestAddressContainer(?Address $address): void
    {
        if (null === $address) {
            return;
        }

        $this->assertOptionalString($address->getFirstName());
        $this->assertOptionalString($address->getLastName());
        $this->assertOptionalString($address->getStreet());
        $this->assertOptionalString($address->getZip());
        $this->assertOptionalString($address->getCity());
        $this->assertOptionalString($address->getCountryCode());
    }

    /** @param array<string, mixed> $data */
    protected function assertJsonHasKeys(array $data, array $keys): void
    {
        foreach ($keys as $key) {
            $this->assertArrayHasKey($key, $data, sprintf('Expected JSON key "%s" to be present.', $key));
        }
    }

    /** @param array<string, mixed> $data */
    protected function assertJsonKeyPresentWhenSet(array $data, string $key, mixed $value): void
    {
        if (null === $value) {
            $this->assertArrayNotHasKey($key, $data, sprintf('Optional key "%s" must be omitted when unset.', $key));

            return;
        }

        $this->assertArrayHasKey($key, $data, sprintf('Expected JSON key "%s" when value is set.', $key));
    }

    /** @param array<string, mixed> $data */
    protected function assertOptionalStringJsonKey(array $data, string $key, ?string $value): void
    {
        if (null === $value) {
            return;
        }

        $this->assertArrayHasKey($key, $data);
        $this->assertSame($value, $data[$key]);
    }

    /** @param array<string, mixed> $data */
    protected function assertOptionalIntJsonKey(array $data, string $key, ?int $value): void
    {
        if (null === $value) {
            return;
        }

        $this->assertArrayHasKey($key, $data);
        $this->assertSame($value, $data[$key]);
    }

    /** @param array<string, mixed> $data */
    protected function assertOptionalBoolJsonKey(array $data, string $key, ?bool $value): void
    {
        if (null === $value) {
            return;
        }

        $this->assertArrayHasKey($key, $data);
        $this->assertSame($value, $data[$key]);
    }

    /** @param array<string, mixed> $data */
    protected function assertOptionalEnumJsonKey(array $data, string $key, ?\BackedEnum $value): void
    {
        if (null === $value) {
            return;
        }

        $this->assertArrayHasKey($key, $data);
        $this->assertSame($value->value, $data[$key]);
    }

    /** @param array<string, mixed> $data @param list<BackedEnum>|null $values */
    protected function assertEnumListJsonKey(array $data, string $key, ?array $values): void
    {
        if (null === $values) {
            return;
        }

        $this->assertArrayHasKey($key, $data);
        $this->assertSame(array_map(static fn (\BackedEnum $enum): string => $enum->value, $values), $data[$key]);
    }
}
