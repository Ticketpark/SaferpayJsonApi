<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Amount;
use Ticketpark\SaferpayJson\Container\Billpay;
use Ticketpark\SaferpayJson\Container\Marketplace;
use Ticketpark\SaferpayJson\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Container\PendingNotification;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;

class CaptureRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Capture';
    const RESPONSE_CLASS = CaptureResponse::class;

    use RequestCommonsTrait;

    /**
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    /**
     * @var Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @var Billpay
     * @SerializedName("Billpay")
     */
    protected $billpay;

    /**
     * @var PendingNotification
     * @SerializedName("PendingNotification")
     */
    protected $pendingNotification;

    /**
     * @var Marketplace
     * @SerializedName("Marketplace")
     */
    protected $marketplace;

    /**
     * @var MastercardIssuerInstallments
     * @SerializedName("MastercardIssuerInstallments")
     */
    protected $mastercardIssuerInstallments;

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

    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getBillpay(): ?Billpay
    {
        return $this->billpay;
    }

    public function setBillpay(Billpay $billpay): self
    {
        $this->billpay = $billpay;

        return $this;
    }

    public function getPendingNotification(): ?PendingNotification
    {
        return $this->pendingNotification;
    }

    public function setPendingNotification(PendingNotification $pendingNotification): self
    {
        $this->pendingNotification = $pendingNotification;

        return $this;
    }

    public function getMarketplace(): ?Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getMastercardIssuerInstallments(): ?MastercardIssuerInstallments
    {
        return $this->mastercardIssuerInstallments;
    }

    public function setMastercardIssuerInstallments(MastercardIssuerInstallments $mastercardIssuerInstallments): self
    {
        $this->mastercardIssuerInstallments = $mastercardIssuerInstallments;

        return $this;
    }
}
