<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class BankAccount
{
    /**
     * @var string
     * @SerializedName("Iban")
     */
    private $iban;

    /**
     * @var string|null
     * @SerializedName("HolderName")
     */
    private $holderName;

    /**
     * @var string|null
     * @SerializedName("BIC")
     */
    private $bic;

    /**
     * @var string|null
     * @SerializedName("BankName")
     */
    private $bankName;

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
