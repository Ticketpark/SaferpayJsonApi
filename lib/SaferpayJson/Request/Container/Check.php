<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Check
{
    const TYPE_ONLINE = 'ONLINE';
    const TYPE_ONLINE_STRONG = 'ONLINE_STRONG';

    /**
     * @var string|null
     * @SerializedName("Type")
     */
    private $type;

    /**
     * @var string|null
     * @SerializedName("TerminalId")
     */
    private $terminalId;

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
