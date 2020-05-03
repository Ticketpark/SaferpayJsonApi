<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

final class Redirect
{
    /**
     * @var string|null
     * @SerializedName("RedirectUrl")
     * @Type("string")
     */
    private $redirectUrl;

    /**
     * @var bool|null
     * @SerializedName("PaymentMeansRequired")
     * @Type("bool")
     */
    private $paymentMeansRequired;

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    public function isPaymentMeansRequired(): ?bool
    {
        return $this->paymentMeansRequired;
    }

    public function setPaymentMeansRequired(?bool $paymentMeansRequired): self
    {
        $this->paymentMeansRequired = $paymentMeansRequired;

        return $this;
    }
}
