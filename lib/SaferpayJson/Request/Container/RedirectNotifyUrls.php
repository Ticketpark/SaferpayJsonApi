<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class RedirectNotifyUrls
{
    /**
     * @var string
     * @SerializedName("Success")
     */
    private $success;

    /**
     * @var string
     * @SerializedName("Fail")
     */
    private $fail;

    public function __construct(string $success, string $fail)
    {
        $this->success = $success;
        $this->fail = $fail;
    }

    public function getSuccess(): string
    {
        return $this->success;
    }

    public function getFail(): string
    {
        return $this->fail;
    }
}
