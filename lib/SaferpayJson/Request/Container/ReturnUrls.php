<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ReturnUrls
{
    /**
     * @SerializedName("Success")
     */
    private string $success;

    /**
     * @SerializedName("Fail")
     */
    private string $fail;

    /**
     * @SerializedName("Abort")
     */
    private ?string $abort = null;

    public function __construct(string $success, string $fail, string $abort = null)
    {
        $this->success = $success;
        $this->fail = $fail;
        $this->abort = $abort;
    }

    public function getSuccess(): string
    {
        return $this->success;
    }

    public function getFail(): string
    {
        return $this->fail;
    }

    public function getAbort(): ?string
    {
        return $this->abort;
    }

    public function setAbort(?string $abort): self
    {
        $this->abort = $abort;

        return $this;
    }
}
