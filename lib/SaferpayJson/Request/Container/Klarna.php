<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Klarna
{
    /**
     * @SerializedName("Attachment")
     * @Type("Ticketpark\SaferpayJson\Request\Container\Attachment")
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
