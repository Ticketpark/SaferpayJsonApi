<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeReferencedResponse;

final class AuthorizeReferencedRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AuthorizeReferenced';
    const RESPONSE_CLASS = AuthorizeReferencedResponse::class;

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
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    private $transactionReference;

    /**
     * @var Authentication|null
     * @SerializedName("Authentication")
     */
    private $authentication;

    /**
     * @var bool|null
     * @SerializedName("SuppressDcc")
     */
    private $suppressDcc;

    public function __construct(
        RequestConfig $requestConfig,
        string $terminalId,
        Payment $payment,
        TransactionReference $transactionReference
    ) {
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

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

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

    public function getAuthentication(): ?Authentication
    {
        return $this->authentication;
    }

    public function setAuthentication(?Authentication $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function isSuppressDcc(): ?bool
    {
        return $this->suppressDcc;
    }

    public function setSuppressDcc(?bool $suppressDcc): self
    {
        $this->suppressDcc = $suppressDcc;

        return $this;
    }

    public function execute(): AuthorizeReferencedResponse
    {
        /** @var AuthorizeReferencedResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
