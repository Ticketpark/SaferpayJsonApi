<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Tokenization
{
    public const STATUS_SUCCESSFUL = 'SUCCESSFUL';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_SCHEME_NOT_SUPPORTED = 'SCHEME_NOT_SUPPORTED';
    public const STATUS_ACQUIRER_NOT_SUPPORTED = 'ACQUIRER_NOT_SUPPORTED';
    public const STATUS_NOT_PERFORMED = 'NOT_PERFORMED';
    public const STATUS_DENIED_BY_SCHEME = 'DENIED_BY_SCHEME';

    #[SerializedName('Program')]
    private ?string $program = null;

    #[SerializedName('Status')]
    private ?string $status = null;

    #[SerializedName('TokenPan')]
    private ?TokenizationTokenPan $tokenPan = null;

    public function getProgram(): ?string
    {
        return $this->program;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getTokenPan(): ?TokenizationTokenPan
    {
        return $this->tokenPan;
    }
}
