<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\CardForm;
use Ticketpark\SaferpayJson\Request\Container\Order;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RedirectNotifyUrls;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrl;
use Ticketpark\SaferpayJson\Request\Container\RiskFactors;
use Ticketpark\SaferpayJson\Request\Container\Styling;
use Ticketpark\SaferpayJson\Request\Container\Transaction\Notification;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\InitializeResponse;

final class InitializeRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Transaction/Initialize';
    public const RESPONSE_CLASS = InitializeResponse::class;

    public const PAYMENT_METHOD_AMEX = "AMEX";
    public const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    public const PAYMENT_METHOD_BONUS = "BONUS";
    public const PAYMENT_METHOD_DINERS = "DINERS";
    public const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    public const PAYMENT_METHOD_JCB = "JCB";
    public const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    public const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    public const PAYMENT_METHOD_MYONE = "MYONE";
    public const PAYMENT_METHOD_VISA = "VISA";

    public const WALLET_MASTERPASS = "MASTERPASS";

    /**
     * @var string|null
     * @SerializedName("ConfigSet")
     */
    private $configSet;

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
     * @var PaymentMeans|null
     * @SerializedName("PaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var Authentication|null
     * @SerializedName("Authentication")
     */
    private $authentication;

    /**
     * @var Payer|null
     * @SerializedName("Payer")
     */
    private $payer;

    /**
     * @var ReturnUrl
     * @SerializedName("ReturnUrl")
     */
    private $returnUrl;

    /**
     * @var Styling|null
     * @SerializedName("Styling")
     */
    private $styling;

    /**
     * @var array<string>|null
     * @SerializedName("PaymentMethods")
     */
    private $paymentMethods;

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

    /**
     * @var CardForm|null
     * @SerializedName("CardForm")
     */
    private $cardForm;

    /**
     * @var RedirectNotifyUrls|null
     * @SerializedName("RedirectNotifyUrls")
     */
    private $redirectNotifyUrls;

    /**
     * @var Notification|null
     * @SerializedName("Notification")
     */
    private $notification;

    public function __construct(
        RequestConfig $requestConfig,
        string        $terminalId,
        Payment       $payment,
        ReturnUrl    $returnUrl
    ) {
        $this->terminalId = $terminalId;
        $this->payment = $payment;
        $this->returnUrl = $returnUrl;

        parent::__construct($requestConfig);
    }

    public function execute(): InitializeResponse
    {
        /** @var InitializeResponse $response */
        $response = $this->doExecute();

        return $response;
    }

    public function setConfigSet(?string $configSet): self
    {
        $this->configSet = $configSet;

        return $this;
    }

    public function setPaymentMeans(?PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    public function setAuthentication(?Authentication $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function setPayer(?Payer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function setStyling(?Styling $styling): self
    {
        $this->styling = $styling;

        return $this;
    }

    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function setRiskFactors(?RiskFactors $riskFactors): self
    {
        $this->riskFactors = $riskFactors;

        return $this;
    }

    public function setCardForm(?CardForm $cardForm): self
    {
        $this->cardForm = $cardForm;

        return $this;
    }

    public function setRedirectNotifyUrls(?RedirectNotifyUrls $redirectNotifyUrls): self
    {
        $this->redirectNotifyUrls = $redirectNotifyUrls;
        return $this;
    }

    public function getConfigSet(): ?string
    {
        return $this->configSet;
    }

    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getAuthentication(): ?Authentication
    {
        return $this->authentication;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function getReturnUrl(): ReturnUrl
    {
        return $this->returnUrl;
    }

    public function getStyling(): ?Styling
    {
        return $this->styling;
    }

    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function getRiskFactors(): ?RiskFactors
    {
        return $this->riskFactors;
    }

    public function getCardForm(): ?CardForm
    {
        return $this->cardForm;
    }

    public function getRedirectNotifyUrls(): ?RedirectNotifyUrls
    {
        return $this->redirectNotifyUrls;
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
}
