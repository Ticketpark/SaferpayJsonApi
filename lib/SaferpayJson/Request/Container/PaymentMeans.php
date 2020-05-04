<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Request\Container\BankAccount;
use Ticketpark\SaferpayJson\Request\Container\Brand;
use Ticketpark\SaferpayJson\Request\Container\Card;

final class PaymentMeans
{
    /**
     * @var Brand|null
     * @SerializedName("Brand")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Brand")
     */
    private $brand;

    /**
     * @var string|null
     * @SerializedName("DisplayText")
     */
    private $displayText;

    /**
     * @var string|null
     * @SerializedName("Wallet")
     */
    private $wallet;

    /**
     * @var Card|null
     * @SerializedName("Card")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Card")
     */
    private $card;

    /**
     * @var BankAccount|null
     * @SerializedName("BankAccount")
     * @Type("Ticketpark\SaferpayJson\Request\Container\BankAccount")
     */
    private $bankAccount;

    /**
     * @var Twint|null
     * @SerializedName("Twint")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Twint")
     */
    private $twint;

    /**
     * @var SaferpayFields|null
     * @SerializedName("SaferpayFields")
     * @Type("Ticketpark\SaferpayJson\Request\Container\SaferpayFields")
     */
    private $saferpayFields;

    /**
     * @var Alias|null
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Alias")
     */
    private $alias;

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
}
