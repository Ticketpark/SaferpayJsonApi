<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class UpdatePaymentMeans
{
    /**
     * @var Card
     * @SerializedName("Card")
     */
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }
}
