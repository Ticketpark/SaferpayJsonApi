<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Brand
{
    public const PAYMENT_METHOD_ALIPAY = 'ALIPAY';
    public const PAYMENT_METHOD_AMEX = 'AMEX';
    public const PAYMENT_METHOD_BANCONTACT = 'BANCONTACT';
    public const PAYMENT_METHOD_BONUS = 'BONUS';
    public const PAYMENT_METHOD_DINERS = 'DINERS';
    public const PAYMENT_METHOD_DIRECTDEBIT = 'DIRECTDEBIT';
    public const PAYMENT_METHOD_EPRZELEWY = 'EPRZELEWY';
    public const PAYMENT_METHOD_EPS = 'EPS';
    public const PAYMENT_METHOD_GIROPAY = 'GIROPAY';
    public const PAYMENT_METHOD_IDEAL = 'IDEAL';
    public const PAYMENT_METHOD_INVOICE = 'INVOICE';
    public const PAYMENT_METHOD_JCB = 'JCB';
    public const PAYMENT_METHOD_MAESTRO = 'MAESTRO';
    public const PAYMENT_METHOD_MASTERCARD = 'MASTERCARD';
    public const PAYMENT_METHOD_MYONE = 'MYONE';
    public const PAYMENT_METHOD_PAYPAL = 'PAYPAL';
    public const PAYMENT_METHOD_PAYDIREKT = 'PAYDIREKT';
    public const PAYMENT_METHOD_POSTCARD = 'POSTCARD';
    public const PAYMENT_METHOD_POSTFINANCE = 'POSTFINANCE';
    public const PAYMENT_METHOD_SAFERPAYTEST = 'SAFERPAYTEST';
    public const PAYMENT_METHOD_SOFORT = 'SOFORT';
    public const PAYMENT_METHOD_TWINT = 'TWINT';
    public const PAYMENT_METHOD_UNIONPAY = 'UNIONPAY';
    public const PAYMENT_METHOD_VISA = 'VISA';
    public const PAYMENT_METHOD_VPAY = 'VPAY';

    /**
     * @var string|null
     * @SerializedName("PaymentMethod")
     * @Type("string")
     */
    private $paymentMethod;

    /**
     * @var string|null
     * @SerializedName("Name")
     * @Type("string")
     */
    private $name;

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
