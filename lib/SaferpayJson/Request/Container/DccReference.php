<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class DccReference
{
    public function __construct(
        #[SerializedName('SelectedCurrencyCode')]
        private string $selectedCurrencyCode,
        #[SerializedName('Token')]
        private string $token,
    ) {
    }

    public function getSelectedCurrencyCode(): string
    {
        return $this->selectedCurrencyCode;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
