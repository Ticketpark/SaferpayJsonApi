<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\HolderAuthentication;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\PaymentPage\AuthorizeReferencedResponse;

class AuthorizeReferencedRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeReferenced';
    const RESPONSE_CLASS = AuthorizeReferencedResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    /**
     * @var HolderAuthentication
     * @SerializedName("Authentication")
     */
    protected $authentication;

    /**
     * @var bool
     * @SerializedName("SuppressDcc")
     */
    protected $suppressDcc;

    public function __construct(
        RequestConfig $requestConfig,
        string $terminalId,
        Payment $payment,
        TransactionReference $transactionReference
    )
    {
        $this->terminalId = $terminalId;
        $this->payment = $payment;
        $this->transactionReference = $transactionReference;

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

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(TransactionReference $transactionReference): self
    {
        $this->transactionReference = $transactionReference;

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

    public function getAuthentication(): ?HolderAuthentication
    {
        return $this->authentication;
    }

    public function setAuthentication(HolderAuthentication $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function isSuppressDcc(): ?bool
    {
        return $this->suppressDcc;
    }

    public function setSuppressDcc(bool $suppressDcc): self
    {
        $this->suppressDcc = $suppressDcc;

        return $this;
    }
}
