<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\CaptureReference;
use Ticketpark\SaferpayJson\Container\PendingNotification;
use Ticketpark\SaferpayJson\Container\Refund;
use Ticketpark\SaferpayJson\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\RefundResponse;

class RefundRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Refund';
    const RESPONSE_CLASS = RefundResponse::class;

    use RequestCommonsTrait;

    /**
     * @var Refund
     * @SerializedName("Refund")
     */
    protected $refund;

    /**
     * @var CaptureReference
     * @SerializedName("CaptureReference")
     */
    protected $captureReference;

    /**
     * @var PendingNotification
     * @SerializedName("PendingNotification")
     */
    protected $pendingNotification;

    public function __construct(
        RequestConfig $requestConfig,
        Refund $refund,
        CaptureReference $captureReference
    ) {
        $this->refund = $refund;
        $this->captureReference = $captureReference;

        parent::__construct($requestConfig);
    }

    public function getRefund(): ?Refund
    {
        return $this->refund;
    }

    public function setRefund(Refund $refund): self
    {
        $this->refund = $refund;

        return $this;
    }

    public function getCaptureReference(): ?CaptureReference
    {
        return $this->captureReference;
    }

    public function setCaptureReference(CaptureReference $captureReference): self
    {
        $this->captureReference = $captureReference;

        return $this;
    }

    public function getPendingNotification(): ?PendingNotification
    {
        return $this->pendingNotification;
    }

    public function setPendingNotification(PendingNotification $pendingNotification): self
    {
        $this->pendingNotification = $pendingNotification;

        return $this;
    }
}
