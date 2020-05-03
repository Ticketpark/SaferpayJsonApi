<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Redirect;
use Ticketpark\SaferpayJson\Response\Response;

class AliasInsertResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    protected $token;

    /**
     * @var \DateTime
     * @SerializedName("Expiration")
     * @Type("string")
     */
    protected $expiration;

    /**
     * @var bool
     * @SerializedName("RedirectRequired")
     * @Type("bool")
     */
    protected $redirectRequired;

    /**
     * @var Redirect
     * @SerializedName("Redirect")
     * @Type("Ticketpark\SaferpayJson\Container\Redirect")
     */
    protected $redirect;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getExpiration(): \DateTime
    {
        return $this->expiration;
    }

    public function setExpiration(\DateTime $expiration): void
    {
        $this->expiration = $expiration;
    }

    public function isRedirectRequired(): ?bool
    {
        return $this->redirectRequired;
    }

    public function setRedirectRequired(bool $redirectRequired): self
    {
        $this->redirectRequired = $redirectRequired;

        return $this;
    }

    public function getRedirect(): ?Redirect
    {
        return $this->redirect;
    }

    public function setRedirect(Redirect $redirect): self
    {
        $this->redirect = $redirect;

        return $this;
    }
}
