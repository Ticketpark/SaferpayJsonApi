<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\BankAccount;
use Ticketpark\SaferpayJson\Container\Brand;
use Ticketpark\SaferpayJson\Container\Card;

class PaymentMeans
{
    /**
     * @var Ticketpark\SaferpayJson\Container\Brand
     * @SerializedName("Brand")
     * @Type("Ticketpark\SaferpayJson\Container\Brand")
     */
    protected $brand;

    /**
     * @var string
     * @SerializedName("DisplayText")
     * @Type("string")
     */
    protected $displayText;

    /**
     * @var string
     * @SerializedName("Wallet")
     * @Type("string")
     */
    protected $wallet;

    /**
     * @var Ticketpark\SaferpayJson\Container\Card
     * @SerializedName("Card")
     * @Type("Ticketpark\SaferpayJson\Container\Card")
     */
    protected $card;

    /**
     * @var Ticketpark\SaferpayJson\Container\BankAccount
     * @SerializedName("BankAccount")
     * @Type("Ticketpark\SaferpayJson\Container\BankAccount")
     */
    protected $bankAccount;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @return Ticketpark\SaferpayJson\Container\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Brand $brand
     * @return PaymentMeans
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }

    /**
     * @param string
     * @return PaymentMeans
     */
    public function setDisplayText($displayText)
    {
        $this->displayText = $displayText;

        return $this;
    }

    /**
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param string $wallet
     * @return PaymentMeans
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Card $card
     * @return PaymentMeans
     */
    public function setCard(Card $card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\BankAccount $bankAccount
     * @return PaymentMeans
     */
    public function setBankAccount(BankAccount $bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return \Ticketpark\SaferpayJson\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param \Ticketpark\SaferpayJson\Container\Alias $alias
     * @return PaymentMeans
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

        return $this;
    }
}
