<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class KlarnaPaymentMeans
{
    #[SerializedName('KlarnaNetworkData')]
    private ?string $klarnaNetworkData = null;

    public function __construct(
        #[SerializedName('KlarnaNetworkSessionToken')]
        private readonly string $klarnaNetworkSessionToken,
    ) {
    }

    public function getKlarnaNetworkSessionToken(): string
    {
        return $this->klarnaNetworkSessionToken;
    }

    public function getKlarnaNetworkData(): ?string
    {
        return $this->klarnaNetworkData;
    }

    public function setKlarnaNetworkData(?string $klarnaNetworkData): self
    {
        $this->klarnaNetworkData = $klarnaNetworkData;

        return $this;
    }
}
