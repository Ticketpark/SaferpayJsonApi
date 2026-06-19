<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\TokenizationStatus;

final class Tokenization
{
    #[SerializedName('Program')]
    private ?string $program = null;

    #[SerializedName('Status')]
    private ?TokenizationStatus $status = null;

    #[SerializedName('TokenPan')]
    private ?TokenizationTokenPan $tokenPan = null;

    public function getProgram(): ?string
    {
        return $this->program;
    }

    public function getStatus(): ?TokenizationStatus
    {
        return $this->status;
    }

    public function getTokenPan(): ?TokenizationTokenPan
    {
        return $this->tokenPan;
    }
}
