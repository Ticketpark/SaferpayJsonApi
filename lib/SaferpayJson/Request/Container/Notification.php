<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Notification
{
    /**
     * @var array<string>|null
     * @SerializedName("MerchantEmails")
     */
    private $merchantEmails = [];

    /**
     * @var string|null
     * @SerializedName("PayerEmail")
     */
    private $payerEmail;

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

    public function getPayerEmail(): ?string
    {
        return $this->payerEmail;
    }

    public function setPayerEmail(string $payerEmail): self
    {
        $this->payerEmail = $payerEmail;

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
