<?php

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Wallet
{
    public const PAYMENT_METHOD_ALIPAY = "ALIPAY";
    public const PAYMENT_METHOD_AMEX = "AMEX";
    public const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    public const PAYMENT_METHOD_BONUS = "BONUS";
    public const PAYMENT_METHOD_DINERS = "DINERS";
    public const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    public const PAYMENT_METHOD_EPRZELEWY = "EPRZELEWY";
    public const PAYMENT_METHOD_EPS = "EPS";
    public const PAYMENT_METHOD_GIROPAY = "GIROPAY";
    public const PAYMENT_METHOD_IDEAL = "IDEAL";
    public const PAYMENT_METHOD_INVOICE = "INVOICE";
    public const PAYMENT_METHOD_JCB = "JCB";
    public const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    public const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    public const PAYMENT_METHOD_MYONE = "MYONE";
    public const PAYMENT_METHOD_PAYPAL = "PAYPAL";
    public const PAYMENT_METHOD_PAYDIREKT = "PAYDIREKT";
    public const PAYMENT_METHOD_POSTCARD = "POSTCARD";
    public const PAYMENT_METHOD_POSTFINANCE = "POSTFINANCE";
    public const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    public const PAYMENT_METHOD_SOFORT = "SOFORT";
    public const PAYMENT_METHOD_TWINT = "TWINT";
    public const PAYMENT_METHOD_UNIONPAY = "UNIONPAY";
    public const PAYMENT_METHOD_VISA = "VISA";
    public const PAYMENT_METHOD_VPAY = "VPAY";
    public const PAYMENT_METHOD_KLARNA = "KLARNA";

    /**
     * @SerializedName("Wallet")
     */
    private string $type;

    /**
     * @var array<string>|null
     * @SerializedName("PaymentMethods")
     */
    private ?array $paymentMethods = null;

    /**
     * @SerializedName("RequestDeliveryAddress")
     */
    private ?bool $requestDeliveryAddress = null;

    /**
     * @SerializedName("EnableAmountAdjustment")
     */
    private ?bool $enableAmountAdjustment = null;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function setPaymentMethods(?array $paymentMethods): Wallet
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function setRequestDeliveryAddress(?bool $requestDeliveryAddress): Wallet
    {
        $this->requestDeliveryAddress = $requestDeliveryAddress;

        return $this;
    }

    public function setEnableAmountAdjustment(?bool $enableAmountAdjustment): Wallet
    {
        $this->enableAmountAdjustment = $enableAmountAdjustment;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    public function getRequestDeliveryAddress(): ?bool
    {
        return $this->requestDeliveryAddress;
    }

    public function getEnableAmountAdjustment(): ?bool
    {
        return $this->enableAmountAdjustment;
    }
}
