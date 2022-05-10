<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
}
