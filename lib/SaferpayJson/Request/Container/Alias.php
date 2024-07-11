<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Alias
{
    /**
     * @SerializedName("Id")
     */
    private string $id;

    /**
     * @SerializedName("VerificationCode")
     */
    private ?string $verificationCode = null;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
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
