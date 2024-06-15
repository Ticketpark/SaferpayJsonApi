<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Request\Container\CardForm;
use Ticketpark\SaferpayJson\Request\Container\Check;
use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Request\Container\Styling;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;

final class AliasInsertRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Alias/Insert';
    public const RESPONSE_CLASS = AliasInsertResponse::class;

    public const PAYMENT_METHOD_AMEX = "AMEX";
    public const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    public const PAYMENT_METHOD_BONUS = "BONUS";
    public const PAYMENT_METHOD_DINERS = "DINERS";
    public const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    public const PAYMENT_METHOD_JCB = "JCB";
    public const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    public const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    public const PAYMENT_METHOD_MYONE = "MYONE";
    public const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    public const PAYMENT_METHOD_UNIONPAY = "UNIONPAY";
    public const PAYMENT_METHOD_VISA = "VISA";
    public const PAYMENT_METHOD_VPAY = "VPAY";

    public const TYPE_CARD = 'CARD';
    public const TYPE_BANK_ACCOUNT = 'BANK_ACCOUNT';
    public const TYPE_POSTFINANCE = 'POSTFINANCE';
    public const TYPE_TWINT = 'TWINT';

    /**
     * @SerializedName("RegisterAlias")
     */
    private RegisterAlias $registerAlias;

    /**
     * @SerializedName("Type")
     * @Type("string")
     */
    private string $type;

    /**
     * @SerializedName("ReturnUrls")
     */
    private ReturnUrls $returnUrls;

    /**
     * @SerializedName("Styling")
     */
    private ?Styling $styling = null;

    /**
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    private ?string $languageCode = null;

    /**
     * @SerializedName("Check")
     */
    private ?Check $check = null;

    /**
     * @var array<string>|null
     * @SerializedName("PaymentMethods")
     */
    private ?array $paymentMethods = null;

    /**
     * @SerializedName("CardForm")
     */
    private ?CardForm $cardForm = null;

    /**
     * @SerializedName("PaymentMeans")
     */
    private ?PaymentMeans $paymentMeans = null;

    public function __construct(
        RequestConfig $requestConfig,
        RegisterAlias $registerAlias,
        string $type,
        ReturnUrls $returnUrls
    ) {
        $this->registerAlias = $registerAlias;
        $this->type = $type;
        $this->returnUrls = $returnUrls;

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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getStyling(): ?Styling
    {
        return $this->styling;
    }

    public function setStyling(?Styling $styling): self
    {
        $this->styling = $styling;

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

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getCardForm(): ?CardForm
    {
        return $this->cardForm;
    }

    public function setCardForm(?CardForm $cardForm): self
    {
        $this->cardForm = $cardForm;

        return $this;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(?PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    public function execute(): AliasInsertResponse
    {
        /** @var AliasInsertResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
