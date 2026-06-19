<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Enum;

enum PaymentMethod: string
{
    case AccountToAccount = 'ACCOUNTTOACCOUNT';
    case Alipay = 'ALIPAY';
    case Amex = 'AMEX';
    case Bancontact = 'BANCONTACT';
    case Blik = 'BLIK';
    case Bonus = 'BONUS';
    case Card = 'CARD';
    case Diners = 'DINERS';
    case DirectDebit = 'DIRECTDEBIT';
    case Eprzelewy = 'EPRZELEWY';
    case Eps = 'EPS';
    case Giftcard = 'GIFTCARD';
    case Giropay = 'GIROPAY';
    case Ideal = 'IDEAL';
    case Invoice = 'INVOICE';
    case Jcb = 'JCB';
    case Klarna = 'KLARNA';
    case Maestro = 'MAESTRO';
    case Mastercard = 'MASTERCARD';
    case Myone = 'MYONE';
    case Payconiq = 'PAYCONIQ';
    case Paydirekt = 'PAYDIREKT';
    case Paypal = 'PAYPAL';
    case Postcard = 'POSTCARD';
    case Postfinance = 'POSTFINANCE';
    case PostfinancePay = 'POSTFINANCEPAY';
    case Reka = 'REKA';
    case SaferpayTest = 'SAFERPAYTEST';
    case Sofort = 'SOFORT';
    case Twint = 'TWINT';
    case Unionpay = 'UNIONPAY';
    case Visa = 'VISA';
    case Vpay = 'VPAY';
    case Wero = 'WERO';
    case Wechatpay = 'WECHATPAY';
    case WlCryptoPayments = 'WLCRYPTOPAYMENTS';
}
