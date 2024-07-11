<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\Check;
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
    public const API_PATH = '/Payment/v1/Alias/InsertDirect';
    public const RESPONSE_CLASS = AliasInsertDirectResponse::class;

    /**
     * @SerializedName("RegisterAlias")
     */
    private RegisterAlias $registerAlias;

    /**
     * @SerializedName("PaymentMeans")
     */
    private PaymentMeans $paymentMeans;

    /**
     * @SerializedName("Check")
     */
    private ?Check $check = null;

    /**
     * @SerializedName("IssuerReference")
     */
    private ?IssuerReference $issuerReference = null;

    public function __construct(RequestConfig $requestConfig, RegisterAlias $registerAlias, PaymentMeans $paymentMeans)
    {
        $this->registerAlias = $registerAlias;
        $this->paymentMeans = $paymentMeans;

        parent::__construct($requestConfig);
    }

    public function getRegisterAlias(): RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

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

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(?Check $check): self
    {
        $this->check = $check;

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

    public function execute(): AliasInsertDirectResponse
    {
        /** @var AliasInsertDirectResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
