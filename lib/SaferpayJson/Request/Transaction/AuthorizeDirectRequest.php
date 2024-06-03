<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\Order;
use Ticketpark\SaferpayJson\Request\Container\Payer;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\RiskFactors;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeDirectResponse;

final class AuthorizeDirectRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Transaction/AuthorizeDirect';
    public const RESPONSE_CLASS = AuthorizeDirectResponse::class;

    public const INITIATOR_MERCHANT = 'MERCHANT';
    public const INITIATOR_PAYER = 'PAYER';

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
     * @var PaymentMeans
     * @SerializedName("PaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var Authentication|null
     * @SerializedName("Authentication")
     */
    private $authentication;

    /**
     * @var RegisterAlias|null
     * @SerializedName("RegisterAlias")
     */
    private $registerAlias;

    /**
     * @var Payer|null
     * @SerializedName("Payer")
     */
    private $payer;

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
     * @var string|null
     * @SerializedName("Initiator")
     */
    private $initiator;

    public function __construct(
        RequestConfig $requestConfig,
        string $terminalId,
        Payment $payment,
        PaymentMeans $paymentMeans
    ) {
        $this->terminalId = $terminalId;
        $this->payment = $payment;
        $this->paymentMeans = $paymentMeans;

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

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

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

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(?RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

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

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function execute(): AuthorizeDirectResponse
    {
        /** @var AuthorizeDirectResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
