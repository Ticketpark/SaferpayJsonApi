<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Enum\PaymentMethod;
use Ticketpark\SaferpayJson\Enum\ThreeDsCondition;
use Ticketpark\SaferpayJson\Enum\Wallet;
use Ticketpark\SaferpayJson\Request\Container\AddressForm;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\CardForm;
use Ticketpark\SaferpayJson\Request\Container\Notification;
use Ticketpark\SaferpayJson\Request\Container\Order;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMethodsOptions;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\RiskFactors;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;

final class InitializeRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/PaymentPage/Initialize';
    public const string RESPONSE_CLASS = InitializeResponse::class;

    #[SerializedName('ConfigSet')]
    private ?string $configSet = null;

    /** @var list<PaymentMethod>|null */
    #[SerializedName('PaymentMethods')]
    private ?array $paymentMethods = null;

    #[SerializedName('PaymentMethodsOptions')]
    private ?PaymentMethodsOptions $paymentMethodsOptions = null;

    #[SerializedName('Authentication')]
    private ?Authentication $authentication = null;

    /** @var list<Wallet>|null */
    #[SerializedName('Wallets')]
    private ?array $wallets = null;

    #[SerializedName('Payer')]
    private ?Payer $payer = null;

    #[SerializedName('RegisterAlias')]
    private ?RegisterAlias $registerAlias = null;

    #[SerializedName('Notification')]
    private ?Notification $notification = null;

    #[SerializedName('BillingAddressForm')]
    private ?AddressForm $billingAddressForm = null;

    #[SerializedName('DeliveryAddressForm')]
    private ?AddressForm $deliveryAddressForm = null;

    #[SerializedName('CardForm')]
    private ?CardForm $cardForm = null;

    #[SerializedName('Condition')]
    private ?ThreeDsCondition $condition = null;

    #[SerializedName('Order')]
    private ?Order $order = null;

    #[SerializedName('RiskFactors')]
    private ?RiskFactors $riskFactors = null;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('TerminalId')]
        private readonly string $terminalId,
        #[SerializedName('Payment')]
        private readonly Payment $payment,
        #[SerializedName('ReturnUrl')]
        private readonly ReturnUrl $returnUrl,
    ) {
        parent::__construct($requestConfig);
    }

    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function getReturnUrl(): ReturnUrl
    {
        return $this->returnUrl;
    }

    public function getConfigSet(): ?string
    {
        return $this->configSet;
    }

    public function setConfigSet(?string $configSet): self
    {
        $this->configSet = $configSet;

        return $this;
    }

    /** @return list<PaymentMethod>|null */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    /** @param list<PaymentMethod>|null $paymentMethods */
    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getPaymentMethodsOptions(): ?PaymentMethodsOptions
    {
        return $this->paymentMethodsOptions;
    }

    public function setPaymentMethodsOptions(?PaymentMethodsOptions $paymentMethodsOptions): self
    {
        $this->paymentMethodsOptions = $paymentMethodsOptions;

        return $this;
    }

    public function getAuthentication(): ?Authentication
    {
        return $this->authentication;
    }

    public function setAuthentication(?Authentication $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }

    /** @return list<Wallet>|null */
    public function getWallets(): ?array
    {
        return $this->wallets;
    }

    /** @param list<Wallet>|null $wallets */
    public function setWallets(?array $wallets): self
    {
        $this->wallets = $wallets;

        return $this;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function setPayer(?Payer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(?RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    public function getNotification(): ?Notification
    {
        return $this->notification;
    }

    public function setNotification(?Notification $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function getBillingAddressForm(): ?AddressForm
    {
        return $this->billingAddressForm;
    }

    public function setBillingAddressForm(?AddressForm $billingAddressForm): self
    {
        $this->billingAddressForm = $billingAddressForm;

        return $this;
    }

    public function getDeliveryAddressForm(): ?AddressForm
    {
        return $this->deliveryAddressForm;
    }

    public function setDeliveryAddressForm(?AddressForm $deliveryAddressForm): self
    {
        $this->deliveryAddressForm = $deliveryAddressForm;

        return $this;
    }

    public function getCardForm(): ?CardForm
    {
        return $this->cardForm;
    }

    public function setCardForm(?CardForm $cardForm): self
    {
        $this->cardForm = $cardForm;

        return $this;
    }

    public function getCondition(): ?ThreeDsCondition
    {
        return $this->condition;
    }

    public function setCondition(?ThreeDsCondition $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getRiskFactors(): ?RiskFactors
    {
        return $this->riskFactors;
    }

    public function setRiskFactors(?RiskFactors $riskFactors): self
    {
        $this->riskFactors = $riskFactors;

        return $this;
    }

    #[\Override]
    public function execute(): InitializeResponse
    {
        /** @var InitializeResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
