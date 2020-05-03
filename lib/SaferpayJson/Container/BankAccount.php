<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankAccount
{
    /**
     * @var string
     * @SerializedName("Iban")
     * @Type("string")
     */
    protected $iban;

    /**
     * @var string
     * @SerializedName("HolderName")
     * @Type("string")
     */
    protected $holderName;

    /**
     * @var string
     * @SerializedName("BIC")
     * @Type("string")
     */
    protected $bic;

    /**
     * @var string
     * @SerializedName("BankName")
     * @Type("string")
     */
    protected $bankName;

    /**
     * @var string
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    protected $countryCode;

    public function __construct(string $iban)
    {
        $this->iban = $iban;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }

    public function getBic(): string
    {
        return $this->bic;
    }

    public function setBic(string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function setBankName(string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
