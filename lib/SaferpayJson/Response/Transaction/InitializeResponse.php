<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Redirect;
use Ticketpark\SaferpayJson\Response\Response;

final class InitializeResponse extends Response
{
    /**
     * @SerializedName("Token")
     */
    private ?string $token = null;

    /**
     * @SerializedName("Expiration")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $expiration = null;

    /**
     * @SerializedName("LiabilityShift")
     */
    private ?bool $liabilityShift = null;

    /**
     * @SerializedName("RedirectRequired")
     */
    private ?bool $redirectRequired = null;

    /**
     * @SerializedName("Redirect")
     */
    private ?Redirect $redirect = null;

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getExpiration(): ?\DateTime
    {
        return $this->expiration;
    }

    public function getLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function getRedirectRequired(): ?bool
    {
        return $this->redirectRequired;
    }

    public function getRedirect(): ?Redirect
    {
        return $this->redirect;
    }
}
