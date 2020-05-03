<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Alias
{
    /**
     * @var string|null
     * @SerializedName("Id")
     * @Type("string")
     */
    private $id;

    /**
     * @var int|null
     * @SerializedName("Lifetime")
     * @Type("integer")
     */
    private $lifetime;

    /**
     * @var string|null
     * @SerializedName("VerificationCode")
     * @Type("string")
     */
    private $verificationCode;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }

    public function setLifetime(?int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    public function setVerificationCode(?string $verificationCode): self
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }
}
