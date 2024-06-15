<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Response;

final class InitializeResponse extends Response
{
    /**
     * @SerializedName("Token")
     */
    private ?string $token;

    /**
     * @SerializedName("Expiration")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $expiration;

    /**
     * @SerializedName("RedirectUrl")
     */
    private ?string $redirectUrl;

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getExpiration(): ?\DateTime
    {
        return $this->expiration;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }
}
