<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Brand
{
    const PAYMENT_METHOD_ALIPAY = 'ALIPAY';
    const PAYMENT_METHOD_AMEX = 'AMEX';
    const PAYMENT_METHOD_BANCONTACT = 'BANCONTACT';
    const PAYMENT_METHOD_BONUS = 'BONUS';
    const PAYMENT_METHOD_DINERS = 'DINERS';
    const PAYMENT_METHOD_DIRECTDEBIT = 'DIRECTDEBIT';
    const PAYMENT_METHOD_EPRZELEWY = 'EPRZELEWY';
    const PAYMENT_METHOD_EPS = 'EPS';
    const PAYMENT_METHOD_GIROPAY = 'GIROPAY';
    const PAYMENT_METHOD_IDEAL = 'IDEAL';
    const PAYMENT_METHOD_INVOICE = 'INVOICE';
    const PAYMENT_METHOD_JCB = 'JCB';
    const PAYMENT_METHOD_MAESTRO = 'MAESTRO';
    const PAYMENT_METHOD_MASTERCARD = 'MASTERCARD';
    const PAYMENT_METHOD_MYONE = 'MYONE';
    const PAYMENT_METHOD_PAYPAL = 'PAYPAL';
    const PAYMENT_METHOD_PAYDIREKT = 'PAYDIREKT';
    const PAYMENT_METHOD_POSTCARD = 'POSTCARD';
    const PAYMENT_METHOD_POSTFINANCE = 'POSTFINANCE';
    const PAYMENT_METHOD_SAFERPAYTEST = 'SAFERPAYTEST';
    const PAYMENT_METHOD_SOFORT = 'SOFORT';
    const PAYMENT_METHOD_TWINT = 'TWINT';
    const PAYMENT_METHOD_UNIONPAY = 'UNIONPAY';
    const PAYMENT_METHOD_VISA = 'VISA';
    const PAYMENT_METHOD_VPAY = 'VPAY';

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
