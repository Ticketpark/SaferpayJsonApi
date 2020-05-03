<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class BankAccount
{
    /**
     * @var string|null
     * @SerializedName("Iban")
     * @Type("string")
     */
    private $iban;

    /**
     * @var string|null
     * @SerializedName("HolderName")
     * @Type("string")
     */
    private $holderName;

    /**
     * @var string|null
     * @SerializedName("BIC")
     * @Type("string")
     */
    private $bic;

    /**
     * @var string|null
     * @SerializedName("BankName")
     * @Type("string")
     */
    private $bankName;

    /**
     * @var string|null
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    private $countryCode;

    public function __construct(?string $iban)
    {
        $this->iban = $iban;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function setHolderName(?string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
