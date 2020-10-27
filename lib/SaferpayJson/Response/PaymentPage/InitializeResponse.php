<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Response;

final class InitializeResponse extends Response
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
     * @var string|null
     * @SerializedName("RedirectUrl")
     * @Type("string")
     */
    private $redirectUrl;

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
