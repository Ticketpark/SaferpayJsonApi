<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\CheckType;

final class Check
{
    #[SerializedName('Type')]
    private ?CheckType $type = null;

    #[SerializedName('TerminalId')]
    private ?string $terminalId = null;

    public function getType(): ?CheckType
    {
        return $this->type;
    }

    public function setType(?CheckType $type): self
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
