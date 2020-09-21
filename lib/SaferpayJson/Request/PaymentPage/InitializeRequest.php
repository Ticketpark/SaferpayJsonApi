<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\AddressForm;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\CardForm;
use Ticketpark\SaferpayJson\Request\Container\Notification;
use Ticketpark\SaferpayJson\Request\Container\Order;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMethodsOptions;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Request\Container\RiskFactors;
use Ticketpark\SaferpayJson\Request\Container\Styling;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;

final class InitializeRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Initialize';
    const RESPONSE_CLASS = InitializeResponse::class;

    const PAYMENT_METHOD_ALIPAY = "ALIPAY";
    const PAYMENT_METHOD_AMEX = "AMEX";
    const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    const PAYMENT_METHOD_BONUS = "BONUS";
    const PAYMENT_METHOD_DINERS = "DINERS";
    const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    const PAYMENT_METHOD_EPRZELEWY = "EPRZELEWY";
    const PAYMENT_METHOD_EPS = "EPS";
    const PAYMENT_METHOD_GIROPAY = "GIROPAY";
    const PAYMENT_METHOD_IDEAL = "IDEAL";
    const PAYMENT_METHOD_INVOICE = "INVOICE";
    const PAYMENT_METHOD_JCB = "JCB";
    const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    const PAYMENT_METHOD_MYONE = "MYONE";
    const PAYMENT_METHOD_PAYPAL = "PAYPAL";
    const PAYMENT_METHOD_PAYDIREKT = "PAYDIREKT";
    const PAYMENT_METHOD_POSTCARD = "POSTCARD";
    const PAYMENT_METHOD_POSTFINANCE = "POSTFINANCE";
    const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    const PAYMENT_METHOD_SOFORT = "SOFORT";
    const PAYMENT_METHOD_TWINT = "TWINT";
    const PAYMENT_METHOD_UNIONPAY = "UNIONPAY";
    const PAYMENT_METHOD_VISA = "VISA";
    const PAYMENT_METHOD_VPAY = "VPAY";

    const WALLET_MASTERPASS = "MASTERPASS";
    const WALLET_APPLEPAY = "APPLEPAY";

    const CONDITION_WITH_LIABILITY_SHIFT = 'WITH_LIABILITY_SHIFT';
    const CONDITION_IF_ALLOWED_BY_SCHEME = 'IF_ALLOWED_BY_SCHEME';

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    private $terminalId;

    /**
     * @var Payment
     * @SerializedName("Payment")
     */
    private $payment;

    /**
     * @var ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    private $returnUrls;

    /**
     * @var string|null
     * @SerializedName("ConfigSet")
     */
    private $configSet;

    /**
     * @var array<string>|null
     * @SerializedName("PaymentMethods")
     */
    private $paymentMethods;

    /**
     * @var PaymentMethodsOptions|null
     * @SerializedName("PaymentMethodsOptions")
     */
    private $paymentMethodsOptions;

    /**
     * @var Authentication|null
     * @SerializedName("Authentication")
     */
    private $authentication;

    /**
     * @var array<string>|null
     * @SerializedName("Wallets")
     */
    private $wallets;

    /**
     * @var Payer|null
     * @SerializedName("Payer")
     */
    private $payer;

    /**
     * @var RegisterAlias|null
     * @SerializedName("RegisterAlias")
     */
    private $registerAlias;

    /**
     * @var Notification|null
     * @SerializedName("Notification")
     */
    private $notification;

    /**
     * @var Styling|null
     * @SerializedName("Styling")
     */
    private $styling;

    /**
     * @var AddressForm|null
     * @SerializedName("BillingAddressForm")
     */
    private $billingAddressForm;

    /**
     * @var AddressForm|null
     * @SerializedName("DeliveryAddressForm")
     */
    private $deliveryAddressForm;

    /**
     * @var CardForm|null
     * @SerializedName("CardForm")
     */
    private $cardForm;

    /**
     * @var string|null
     * @SerializedName("Condition")
     */
    private $condition;

    /**
     * @var Order|null
     * @SerializedName("Order")
     */
    private $order;

    /**
     * @var RiskFactors|null
     * @SerializedName("RiskFactors")
     */
    private $riskFactors;

    public function __construct(
        RequestConfig $requestConfig,
        string $terminalId,
        Payment $payment,
        ReturnUrls $returnUrls
    ) {
        $this->terminalId = $terminalId;
        $this->payment = $payment;
        $this->returnUrls = $returnUrls;

        parent::__construct($requestConfig);
    }

    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    public function setTerminalId(string $terminalId): self
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getReturnUrls(): ReturnUrls
    {
        return $this->returnUrls;
    }

    public function setReturnUrls(ReturnUrls $returnUrls): self
    {
        $this->returnUrls = $returnUrls;

        return $this;
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

    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

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

    public function getWallets(): ?array
    {
        return $this->wallets;
    }

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

    public function getStyling(): ?Styling
    {
        return $this->styling;
    }

    public function setStyling(?Styling $styling): self
    {
        $this->styling = $styling;

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

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): self
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


    public function execute(): InitializeResponse
    {
        /** @var InitializeResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
