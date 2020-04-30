<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CardForm
{
    const HOLDER_NAME_NONE = 'NONE';
    const HOLDER_NAME_MANDATORY = 'MANDATORY';

    /**
     * @var string
     * @SerializedName("HolderName")
     */
    protected $holderName;

    public function __construct(string $holderName)
    {
        $this->holderName = $holderName;
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
}
