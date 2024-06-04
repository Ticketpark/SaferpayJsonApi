<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PaymentMeans
{
    /**
     * @var Brand|null
     * @SerializedName("Brand")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Brand")
     */
    private $brand;

    /**
     * @var string|null
     * @SerializedName("DisplayText")
     * @Type("string")
     */
    private $displayText;

    /**
     * @var string|null
     * @SerializedName("Wallet")
     * @Type("string")
     */
    private $wallet;

    /**
     * @var Card|null
     * @SerializedName("Card")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Card")
     */
    private $card;

    /**
     * @var BankAccount|null
     * @SerializedName("BankAccount")
     * @Type("Ticketpark\SaferpayJson\Response\Container\BankAccount")
     */
    private $bankAccount;

    /**
     * @var Twint|null
     * @SerializedName("Twint")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Twint")
     */
    private $twint;

    /**
     * @var PayPal|null
     * @SerializedName("PayPal")
     * @Type("Ticketpark\SaferpayJson\Response\Container\PayPal")
     */
    private $payPal;

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }

    public function getWallet(): ?string
    {
        return $this->wallet;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function getTwint(): ?Twint
    {
        return $this->twint;
    }

    public function getPayPal(): ?PayPal
    {
        return $this->payPal;
    }
}
