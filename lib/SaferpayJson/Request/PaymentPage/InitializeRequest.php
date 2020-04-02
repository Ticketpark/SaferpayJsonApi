<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Notification;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Container\Styling;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Response\PaymentPage\InitializeResponse;

class InitializeRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Initialize';
    const RESPONSE_CLASS = InitializeResponse::class;

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
    const PAYMENT_METHOD_POSTCARD = "POSTCARD";
    const PAYMENT_METHOD_POSTFINANCE = "POSTFINANCE";
    const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    const PAYMENT_METHOD_SOFORT = "SOFORT";
    const PAYMENT_METHOD_TWINT = "TWINT";
    const PAYMENT_METHOD_VISA = "VISA";
    const PAYMENT_METHOD_VPAY = "VPAY";

    use RequestCommonsTrait;

    /**
     * @var Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var Payer
     * @SerializedName("Payer")
     */
    protected $payer;

    /**
     * @var ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var Notification
     * @SerializedName("Notification")
     */
    protected $notification;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var array<string>
     * @SerializedName("PaymentMethods")
     */
    protected $paymentMethods;

    /**
     * @var RegisterAlias|null
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var Styling|null
     * @SerializedName("Styling")
     */
    protected $styling;

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getPayer(): Payer
    {
        return $this->payer;
    }

    public function setPayer(Payer $payer): self
    {
        $this->payer = $payer;

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

    public function getNotification(): Notification
    {
        return $this->notification;
    }

    public function setNotification(Notification $notification): self
    {
        $this->notification = $notification;

        return $this;
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

    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    public function getStyling(): ?Styling
    {
        return $this->styling;
    }

    public function setStyling(Styling $styling): self
    {
        $this->styling = $styling;

        return $this;
    }
}
