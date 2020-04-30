<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Notification
{
    /**
     * @var array<string>
     * @SerializedName("MerchantEmails")
     */
    protected $merchantEmails = [];

    /**
     * @var string|null
     * @SerializedName("PayerEmail")
     */
    protected $payerEmail;

    /**
     * @var string|null
     * @SerializedName("NotifyUrl")
     */
    protected $notifyUrl;

    public function getMerchantEmails(): array
    {
        return $this->merchantEmail;
    }

    public function setMerchantEmails(array $merchantEmails): self
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
