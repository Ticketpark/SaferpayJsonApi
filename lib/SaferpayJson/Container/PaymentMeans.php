<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\BankAccount;
use Ticketpark\SaferpayJson\Container\Brand;
use Ticketpark\SaferpayJson\Container\Card;

class PaymentMeans
{
    /**
     * @var Brand
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
     * @var Card
     * @SerializedName("Card")
     * @Type("Ticketpark\SaferpayJson\Container\Card")
     */
    protected $card;

    /**
     * @var BankAccount
     * @SerializedName("BankAccount")
     * @Type("Ticketpark\SaferpayJson\Container\BankAccount")
     */
    protected $bankAccount;

    /**
     * @var Twint
     * @SerializedName("Twint")
     * @Type("Ticketpark\SaferpayJson\Container\Twint")
     */
    protected $twint;

    /**
     * @var SaferpayFields
     * @SerializedName("SaferpayFields")
     * @Type("Ticketpark\SaferpayJson\Container\SaferpayFields")
     */
    protected $saferpayFields;

    /**
     * @var Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    public function getBrand(): Brand
    {
        return $this->brand;
    }

    public function setBrand(Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getDisplayText(): string
    {
        return $this->displayText;
    }

    public function setDisplayText(string $displayText): self
    {
        $this->displayText = $displayText;

        return $this;
    }

    public function getWallet(): string
    {
        return $this->wallet;
    }

    public function setWallet(string $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    public function getCard(): Card
    {
        return $this->card;
    }

    public function setCard(Card $card): self
    {
        $this->card = $card;

        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    public function getTwint(): ?Twint
    {
        return $this->twint;
    }

    public function setTwint(Twint $twint): self
    {
        $this->twint = $twint;

        return $this;
    }

    public function getSaferpayFields(): ?SaferpayFields
    {
        return $this->saferpayFields;
    }

    public function setSaferpayFields(SaferpayFields $saferpayFields): self
    {
        $this->saferpayFields = $saferpayFields;

        return $this;
    }

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function setAlias(Alias $alias): self
    {
        $this->alias = $alias;

        return $this;
    }
}
