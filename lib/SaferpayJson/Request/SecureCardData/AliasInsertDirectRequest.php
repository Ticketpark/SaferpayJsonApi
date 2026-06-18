<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Check;
use Ticketpark\SaferpayJson\Request\Container\ExternalThreeDS;
use Ticketpark\SaferpayJson\Request\Container\IssuerReference;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertDirectResponse;

final class AliasInsertDirectRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Alias/InsertDirect';
    public const string RESPONSE_CLASS = AliasInsertDirectResponse::class;

    #[SerializedName('Check')]
    private ?Check $check = null;

    #[SerializedName('ExternalThreeDS')]
    private ?ExternalThreeDS $externalThreeDS = null;

    #[SerializedName('IssuerReference')]
    private ?IssuerReference $issuerReference = null;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('RegisterAlias')]
        private readonly RegisterAlias $registerAlias,
        #[SerializedName('PaymentMeans')]
        private readonly PaymentMeans $paymentMeans,
    ) {
        parent::__construct($requestConfig);
    }

    public function getRegisterAlias(): RegisterAlias
    {
        return $this->registerAlias;
    }

    public function getPaymentMeans(): PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(?Check $check): self
    {
        $this->check = $check;

        return $this;
    }

    public function getExternalThreeDS(): ?ExternalThreeDS
    {
        return $this->externalThreeDS;
    }

    public function setExternalThreeDS(?ExternalThreeDS $externalThreeDS): self
    {
        $this->externalThreeDS = $externalThreeDS;

        return $this;
    }

    public function getIssuerReference(): ?IssuerReference
    {
        return $this->issuerReference;
    }

    public function setIssuerReference(?IssuerReference $issuerReference): self
    {
        $this->issuerReference = $issuerReference;

        return $this;
    }

    #[\Override]
    public function execute(): AliasInsertDirectResponse
    {
        /** @var AliasInsertDirectResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
