<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container\Transaction;

use JMS\Serializer\Annotation\SerializedName;

final class Notification
{
    #[SerializedName('PayerDccReceiptEmail')]
    private ?string $payerDccReceiptEmail = null;

    public function getPayerDccReceiptEmail(): ?string
    {
        return $this->payerDccReceiptEmail;
    }

    public function setPayerDccReceiptEmail(?string $payerDccReceiptEmail): self
    {
        $this->payerDccReceiptEmail = $payerDccReceiptEmail;

        return $this;
    }
}
