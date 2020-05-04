<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class PendingNotification
{
    /**
     * @var array<string>|null
     * @SerializedName("MerchantEmails")
     */
    private $merchantEmails = [];

    /**
     * @var string|null
     * @SerializedName("NotifyUrl")
     */
    private $notifyUrl;

    public function getMerchantEmails(): ?array
    {
        return $this->merchantEmails;
    }

    public function setMerchantEmails(?array $merchantEmails): self
    {
        $this->merchantEmails = $merchantEmails;

        return $this;
    }

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
