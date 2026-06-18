<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final readonly class Attachment
{
    public function __construct(
        #[SerializedName('ContentType')]
        private string $contentType,
        #[SerializedName('Body')]
        private string $body,
    ) {
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}
