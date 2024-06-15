<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class BankAccount
{
    /**
     * @SerializedName("Iban")
     */
    private string $iban;

    /**
     * @SerializedName("HolderName")
     */
    private ?string $holderName = null;

    /**
     * @SerializedName("BIC")
     */
    private ?string $bic = null;

    /**
     * @SerializedName("BankName")
     */
    private ?string $bankName = null;

    public function __construct(string $iban)
    {
        $this->iban = $iban;
    }

    public function getIban(): string
    {
        return $this->iban;
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
}
