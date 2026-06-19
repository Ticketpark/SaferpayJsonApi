<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\CardFormHolderName;
use Ticketpark\SaferpayJson\Request\Enum\CardFormVerificationCode;

final class CardForm
{
    #[SerializedName('HolderName')]
    private ?CardFormHolderName $holderName = null;

    #[SerializedName('VerificationCode')]
    private ?CardFormVerificationCode $verificationCode = null;

    public function getHolderName(): ?CardFormHolderName
    {
        return $this->holderName;
    }

    public function setHolderName(CardFormHolderName $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }

    public function getVerificationCode(): ?CardFormVerificationCode
    {
        return $this->verificationCode;
    }

    public function setVerificationCode(CardFormVerificationCode $verificationCode): self
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }
}
