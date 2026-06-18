<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Klarna
{
    public function __construct(
        #[SerializedName('Attachment')]
        private Attachment $attachment,
    ) {
    }

    public function getAttachment(): Attachment
    {
        return $this->attachment;
    }
}
