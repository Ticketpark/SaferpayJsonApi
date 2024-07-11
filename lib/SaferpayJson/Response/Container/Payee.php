<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Payee
{
    /**
     * @SerializedName("Iban")
     */
    private ?string $iban = null;

    /**
     * @SerializedName("HolderName")
     */
    private ?string $holderName = null;

    /**
     * @SerializedName("Bic")
     */
    private ?string $bic = null;

    /**
     * @SerializedName("BankName")
     */
    private ?string $bankName = null;

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
}
