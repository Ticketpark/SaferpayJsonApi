<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Enum\TransactionStatus;
use Ticketpark\SaferpayJson\Response\Response;

final class CaptureResponse extends Response
{
    #[SerializedName('CaptureId')]
    private ?string $captureId = null;

    #[SerializedName('Status')]
    private ?TransactionStatus $status = null;

    #[SerializedName('Date')]
    #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")]
    private ?\DateTimeImmutable $date = null;

    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    public function getStatus(): ?TransactionStatus
    {
        return $this->status;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }
}
