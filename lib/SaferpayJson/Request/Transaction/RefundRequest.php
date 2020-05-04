<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\CaptureReference;
use Ticketpark\SaferpayJson\Request\Container\PendingNotification;
use Ticketpark\SaferpayJson\Request\Container\Refund;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\RefundResponse;

final class RefundRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Refund';
    const RESPONSE_CLASS = RefundResponse::class;

    use RequestCommonsTrait;

    /**
     * @var Refund
     * @SerializedName("Refund")
     */
    private $refund;

    /**
     * @var CaptureReference
     * @SerializedName("CaptureReference")
     */
    private $captureReference;

    /**
     * @var PendingNotification|null
     * @SerializedName("PendingNotification")
     */
    private $pendingNotification;

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

    public function setPendingNotification(?PendingNotification $pendingNotification): self
    {
        $this->pendingNotification = $pendingNotification;

        return $this;
    }

    public function execute(): RefundResponse
    {
        /** @var RefundResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
