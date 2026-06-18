<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\CardFormHolderName;

final class CardForm
{
    #[SerializedName('HolderName')]
    private ?CardFormHolderName $holderName = null;

    public function getHolderName(): ?CardFormHolderName
    {
        return $this->holderName;
    }

    public function setHolderName(CardFormHolderName $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }
}
