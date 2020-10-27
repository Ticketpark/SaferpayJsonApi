<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Redirect;
use Ticketpark\SaferpayJson\Response\Response;

final class AliasInsertResponse extends Response
{
    /**
     * @var string|null
     * @SerializedName("Token")
     * @Type("string")
     */
    private $token;

    /**
     * @var \DateTime|null
     * @SerializedName("Expiration")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $expiration;

    /**
     * @var bool|null
     * @SerializedName("RedirectRequired")
     * @Type("bool")
     */
    private $redirectRequired;

    /**
     * @var Redirect|null
     * @SerializedName("Redirect")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Redirect")
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
