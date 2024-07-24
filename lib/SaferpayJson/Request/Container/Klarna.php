<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Klarna
{
    /**
     * @SerializedName("Attachment")
     */
    private Attachment $attachment;

    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }

    public function getAttachment(): Attachment
    {
        return $this->attachment;
    }
}
