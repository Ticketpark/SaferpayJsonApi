<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Amount;
use Ticketpark\SaferpayJson\Request\Container\Marketplace;
use Ticketpark\SaferpayJson\Request\Container\MastercardIssuerInstallments;
use Ticketpark\SaferpayJson\Request\Container\MerchantFundDistributor;
use Ticketpark\SaferpayJson\Request\Container\PendingNotification;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\CaptureResponse;

final class CaptureRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Transaction/Capture';
    public const string RESPONSE_CLASS = CaptureResponse::class;

    #[SerializedName('Amount')]
    private ?Amount $amount = null;

    #[SerializedName('PendingNotification')]
    private ?PendingNotification $pendingNotification = null;

    #[SerializedName('Marketplace')]
    private ?Marketplace $marketplace = null;

    #[SerializedName('MastercardIssuerInstallments')]
    private ?MastercardIssuerInstallments $mastercardIssuerInstallments = null;

    #[SerializedName('MerchantFundDistributor')]
    private ?MerchantFundDistributor $merchantFundDistributor = null;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('TransactionReference')]
        private readonly TransactionReference $transactionReference,
    ) {
        parent::__construct($requestConfig);
    }

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
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

    public function getMerchantFundDistributor(): ?MerchantFundDistributor
    {
        return $this->merchantFundDistributor;
    }

    public function setMerchantFundDistributor(?MerchantFundDistributor $merchantFundDistributor): self
    {
        $this->merchantFundDistributor = $merchantFundDistributor;

        return $this;
    }

    #[\Override]
    public function execute(): CaptureResponse
    {
        /** @var CaptureResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
