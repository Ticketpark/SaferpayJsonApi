<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

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
     * @SerializedName("Twint")
     */
    private ?Twint $twint = null;

    /**
     * @SerializedName("SaferpayFields")
     */
    private ?SaferpayFields $saferpayFields = null;

    /**
     * @SerializedName("Alias")
     */
    private ?Alias $alias = null;

    /**
     * @SerializedName("SchemeToken")
     */
    private ?SchemeToken $schemeToken = null;

    /**
     * @SerializedName("ApplePay")
     */
    private ?ApplePay $applePay = null;

    /**
     * @SerializedName("GooglePay")
     */
    private ?GooglePay $googlePay = null;

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }

    public function setDisplayText(?string $displayText): self
    {
        $this->displayText = $displayText;

        return $this;
    }

    public function getWallet(): ?string
    {
        return $this->wallet;
    }

    public function setWallet(?string $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): self
    {
        $this->card = $card;

        return $this;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    public function getTwint(): ?Twint
    {
        return $this->twint;
    }

    public function setTwint(?Twint $twint): self
    {
        $this->twint = $twint;

        return $this;
    }

    public function getSaferpayFields(): ?SaferpayFields
    {
        return $this->saferpayFields;
    }

    public function setSaferpayFields(?SaferpayFields $saferpayFields): self
    {
        $this->saferpayFields = $saferpayFields;

        return $this;
    }

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function setAlias(?Alias $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getSchemeToken(): ?SchemeToken
    {
        return $this->schemeToken;
    }

    public function setSchemeToken(?SchemeToken $schemeToken): self
    {
        $this->schemeToken = $schemeToken;
        return $this;
    }

    public function getApplePay(): ?ApplePay
    {
        return $this->applePay;
    }

    public function setApplePay(?ApplePay $applePay): self
    {
        $this->applePay = $applePay;

        return $this;
    }

    public function getGooglePay(): ?GooglePay
    {
        return $this->googlePay;
    }

    public function setGooglePay(?GooglePay $googlePay): self
    {
        $this->googlePay = $googlePay;

        return $this;
    }
}
