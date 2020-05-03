<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class UpdatePaymentMeans
{
    /**
     * @var Card
     * @SerializedName("Card")
     */
    protected $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(Card $card): self
    {
        $this->card = $card;

        return $this;
    }
}
