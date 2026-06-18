<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Order
{
    /** @var list<OrderItem>|null */
    #[SerializedName('Items')]
    private ?array $items = [];

    /** @return list<OrderItem>|null */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /** @param list<OrderItem>|null $items */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
