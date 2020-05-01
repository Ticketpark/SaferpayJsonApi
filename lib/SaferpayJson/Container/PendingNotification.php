<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class PendingNotification
{
    /**
     * @var array<string>
     * @SerializedName("MerchantEmails")
     */
    protected $merchantEmails = [];

    /**
     * @var string|null
     * @SerializedName("NotifyUrl")
     */
    protected $notifyUrl;

    public function getMerchantEmails(): array
    {
        return $this->merchantEmails;
    }

    public function setMerchantEmails(array $merchantEmails): self
    {
        $this->merchantEmails = $merchantEmails;

        return $this;
    }

    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    public function setNotifyUrl(string $notifyUrl): self
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }
}
