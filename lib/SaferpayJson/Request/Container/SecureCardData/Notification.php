<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;

final class Notification
{
    #[SerializedName('NotifyUrl')]
    private ?string $notifyUrl = null;

    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    public function setNotifyUrl(?string $notifyUrl): self
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }
}
