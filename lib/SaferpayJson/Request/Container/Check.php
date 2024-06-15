<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Check
{
    public const TYPE_ONLINE = 'ONLINE';
    public const TYPE_ONLINE_STRONG = 'ONLINE_STRONG';

    /**
     * @SerializedName("Type")
     */
    private ?string $type = null;

    /**
     * @SerializedName("TerminalId")
     */
    private ?string $terminalId = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }

    public function setTerminalId(?string $terminalId): self
    {
        $this->terminalId = $terminalId;

        return $this;
    }
}
