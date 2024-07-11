<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class PaymentMeans
{
    /**
     * @SerializedName("Brand")
     */
    private ?Brand $brand = null;

    /**
     * @SerializedName("DisplayText")
     */
    private ?string $displayText = null;

    /**
     * @SerializedName("Wallet")
     */
    private ?string $wallet = null;

    /**
     * @SerializedName("Card")
     */
    private ?Card $card = null;

    /**
     * @SerializedName("BankAccount")
     */
    private ?BankAccount $bankAccount = null;

    /**
     * @var PayPal|null
     * @SerializedName("PayPal")
     */
    private ?PayPal $payPal = null;

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

    public function getPayPal(): ?PayPal
    {
        return $this->payPal;
    }
}
