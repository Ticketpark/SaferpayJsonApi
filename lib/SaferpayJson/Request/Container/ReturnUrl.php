<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class ReturnUrl
{
    public function __construct(
        #[SerializedName('Url')]
        private string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
