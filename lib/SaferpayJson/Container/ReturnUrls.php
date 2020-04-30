<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class ReturnUrls
{
    /**
     * @var string
     * @SerializedName("Success")
     */
    protected $success;

    /**
     * @var string
     * @SerializedName("Fail")
     */
    protected $fail;

    /**
     * @var string|null
     * @SerializedName("Abort")
     */
    protected $abort;

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

    public function setSuccess(string $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getFail(): string
    {
        return $this->fail;
    }

    public function setFail(string $fail): self
    {
        $this->fail = $fail;

        return $this;
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
