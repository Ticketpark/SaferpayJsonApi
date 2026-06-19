<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class PaymentMeans
{
    #[SerializedName('Card')]
    private ?Card $card = null;

    #[SerializedName('BankAccount')]
    private ?BankAccount $bankAccount = null;

    #[SerializedName('SaferpayFields')]
    private ?SaferpayFields $saferpayFields = null;

    #[SerializedName('Alias')]
    private ?Alias $alias = null;

    #[SerializedName('SchemeToken')]
    private ?SchemeToken $schemeToken = null;

    #[SerializedName('ApplePay')]
    private ?ApplePay $applePay = null;

    #[SerializedName('GooglePay')]
    private ?GooglePay $googlePay = null;

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
