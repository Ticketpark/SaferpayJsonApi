<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class DccReference
{
    #[SerializedName('SelectedCurrencyCode')]
    private string $selectedCurrencyCode;

    #[SerializedName('Token')]
    private string $token;

    public function __construct(string $selectedCurrencyCode, string $token)
    {
        $this->selectedCurrencyCode = $selectedCurrencyCode;
        $this->token = $token;
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
