<?php

declare(strict_types=1);

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
     * @SerializedName("SuccessNotifyUrl")
     */
    private $successNotifyUrl;

    /**
     * @var string|null
     * @SerializedName("FailNotifyUrl")
     */
    private $failNotifyUrl;

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

    public function getSuccessNotifyUrl(): ?string
    {
        return $this->successNotifyUrl;
    }

    public function setSuccessNotifyUrl(?string $successNotifyUrl): self
    {
        $this->successNotifyUrl = $successNotifyUrl;
        return $this;
    }

    public function getFailNotifyUrl(): ?string
    {
        return $this->failNotifyUrl;
    }

    public function setFailNotifyUrl(?string $failNotifyUrl): self
    {
        $this->failNotifyUrl = $failNotifyUrl;
        return $this;
    }
}
