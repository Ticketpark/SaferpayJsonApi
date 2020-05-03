<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Redirect;
use Ticketpark\SaferpayJson\Response\Response;

final class AliasInsertResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    private $token;

    /**
     * @var \DateTime
     * @SerializedName("Expiration")
     * @Type("string")
     */
    private $expiration;

    /**
     * @var bool
     * @SerializedName("RedirectRequired")
     * @Type("bool")
     */
    private $redirectRequired;

    /**
     * @var Redirect
     * @SerializedName("Redirect")
     * @Type("Ticketpark\SaferpayJson\Container\Redirect")
     */
    private $redirect;

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getExpiration(): ?\DateTime
    {
        return $this->expiration;
    }

    public function isRedirectRequired(): ?bool
    {
        return $this->redirectRequired;
    }

    public function getRedirect(): ?Redirect
    {
        return $this->redirect;
    }
}
