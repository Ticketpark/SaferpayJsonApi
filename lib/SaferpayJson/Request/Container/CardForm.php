<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class CardForm
{
    const HOLDER_NAME_NONE = 'NONE';
    const HOLDER_NAME_MANDATORY = 'MANDATORY';

    /**
     * @var string|null
     * @SerializedName("HolderName")
     */
    private $holderName;

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
