<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Notification
{
    /**
     * @var string
     * @SerializedName("MerchantEmail")
     */
    protected $merchantEmail;

    /**
     * @var string
     * @SerializedName("PayerEmail")
     */
    protected $payerEmail;

    /**
     * @var string
     * @SerializedName("NotifyUrl")
     */
    protected $notifyUrl;

    public function getMerchantEmail(): string
    {
        return $this->merchantEmail;
    }

    public function setMerchantEmail(string $merchantEmail): self
    {
        $this->merchantEmail = $merchantEmail;

        return $this;
    }

    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    public function setPayerEmail(string $payerEmail): self
    {
        $this->payerEmail = $payerEmail;

        return $this;
    }

    public function getNotifyUrl(): string
    {
        return $this->notifyUrl;
    }

    public function setNotifyUrl(string $notifyUrl): self
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }
}
