<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Notification
{
    /**
     * @var array<string>
     * @SerializedName("MerchantEmails")
     */
    private ?array $merchantEmails = [];

    /**
     * @SerializedName("PayerEmail")
     */
    private ?string $payerEmail = null;

    /**
     * @var string|null
     * @SerializedName("PayerDccReceiptEmail")
     */
    private ?string $payerDccReceiptEmail = null;

    /**
     * @var string|null
     * @SerializedName("SuccessNotifyUrl")
     */
    private ?string $successNotifyUrl = null;

    /**
     * @SerializedName("FailNotifyUrl")
     */
    private ?string $failNotifyUrl = null;

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

    public function getPayerDccReceiptEmail(): ?string
    {
        return $this->payerDccReceiptEmail;
    }

    public function setPayerDccReceiptEmail(?string $payerDccReceiptEmail): self
    {
        $this->payerDccReceiptEmail = $payerDccReceiptEmail;
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
