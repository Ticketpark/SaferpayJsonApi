<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class CardForm
{
    public const string HOLDER_NAME_NONE = 'NONE';
    public const string HOLDER_NAME_MANDATORY = 'MANDATORY';

    #[SerializedName('HolderName')]
    private ?string $holderName = null;

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;

        return $this;
    }
}
