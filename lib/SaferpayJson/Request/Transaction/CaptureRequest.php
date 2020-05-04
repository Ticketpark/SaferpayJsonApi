<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Billpay;
use Ticketpark\SaferpayJson\Request\Container\Marketplace;
use Ticketpark\SaferpayJson\Request\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Request\Container\PendingNotification;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;

final class CaptureRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Capture';
    const RESPONSE_CLASS = CaptureResponse::class;

    use RequestCommonsTrait;

    /**
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    private $transactionReference;

    /**
     * @var Amount|null
     * @SerializedName("Amount")
     */
    private $amount;

    /**
     * @var Billpay|null
     * @SerializedName("Billpay")
     */
    private $billpay;

    /**
     * @var PendingNotification|null
     * @SerializedName("PendingNotification")
     */
    private $pendingNotification;

    /**
     * @var Marketplace|null
     * @SerializedName("Marketplace")
     */
    private $marketplace;

    /**
     * @var MastercardIssuerInstallments|null
     * @SerializedName("MastercardIssuerInstallments")
     */
    private $mastercardIssuerInstallments;

    public function __construct(
        RequestConfig $requestConfig,
        TransactionReference $transactionReference
    ) {
        $this->transactionReference = $transactionReference;

        parent::__construct($requestConfig);
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

    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    public function setAmount(?Amount $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getBillpay(): ?Billpay
    {
        return $this->billpay;
    }

    public function setBillpay(?Billpay $billpay): self
    {
        $this->billpay = $billpay;

        return $this;
    }

    public function getPendingNotification(): ?PendingNotification
    {
        return $this->pendingNotification;
    }

    public function setPendingNotification(?PendingNotification $pendingNotification): self
    {
        $this->pendingNotification = $pendingNotification;

        return $this;
    }

    public function getMarketplace(): ?Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(?Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getMastercardIssuerInstallments(): ?MastercardIssuerInstallments
    {
        return $this->mastercardIssuerInstallments;
    }

    public function setMastercardIssuerInstallments(?MastercardIssuerInstallments $mastercardIssuerInstallments): self
    {
        $this->mastercardIssuerInstallments = $mastercardIssuerInstallments;

        return $this;
    }

    public function execute(): CaptureResponse
    {
        /** @var CaptureResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
