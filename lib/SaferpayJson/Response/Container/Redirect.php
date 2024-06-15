<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Redirect
{
    /**
     * @SerializedName("RedirectUrl")
     */
    private ?string $redirectUrl = null;

    /**
     * @SerializedName("PaymentMeansRequired")
     */
    private ?bool $paymentMeansRequired = null;

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function isPaymentMeansRequired(): ?bool
    {
        return $this->paymentMeansRequired;
    }
}
