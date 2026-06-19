<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Authentication;
use Ticketpark\SaferpayJson\Request\Container\Payment;
use Ticketpark\SaferpayJson\Request\Container\Transaction\Notification;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeReferencedResponse;

final class AuthorizeReferencedRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Transaction/AuthorizeReferenced';
    public const string RESPONSE_CLASS = AuthorizeReferencedResponse::class;

    #[SerializedName('Authentication')]
    private ?Authentication $authentication = null;

    #[SerializedName('SuppressDcc')]
    private ?bool $suppressDcc = null;

    #[SerializedName('Notification')]
    private ?Notification $notification = null;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('TerminalId')]
        private readonly string $terminalId,
        #[SerializedName('Payment')]
        private readonly Payment $payment,
        #[SerializedName('TransactionReference')]
        private readonly TransactionReference $transactionReference,
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

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
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

    public function getNotification(): ?Notification
    {
        return $this->notification;
    }

    public function setNotification(?Notification $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    #[\Override]
    public function execute(): AuthorizeReferencedResponse
    {
        /** @var AuthorizeReferencedResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
