<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class RedirectNotifyUrls
{
    public function __construct(
        #[SerializedName('Success')]
        private string $success,
        #[SerializedName('Fail')]
        private string $fail,
    ) {
    }

    public function getSuccess(): string
    {
        return $this->success;
    }

    public function getFail(): string
    {
        return $this->fail;
    }
}
