<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Attachment
{
    /**
     * @SerializedName("ContentType")
     */
    private string $contentType;

    /**
     * @SerializedName("Body")
     */
    private string $body;

    public function __construct(string $contentType, string $body)
    {
        $this->contentType = $contentType;
        $this->body = $body;
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
