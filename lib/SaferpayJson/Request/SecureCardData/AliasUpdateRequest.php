<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasUpdateResponse;

class AliasUpdateRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Update';
    const RESPONSE_CLASS = AliasUpdateResponse::class;

    use RequestCommonsTrait;

    /**
     * @var UpdateAlias
     * @SerializedName("UpdateAlias")
     */
    protected $updateAlias;

    /**
     * @var UpdatePaymentMeans
     * @SerializedName("UpdatePaymentMeans")
     */
    protected $updatePaymentMeans;

    public function __construct(
        RequestConfig $requestConfig,
        UpdateAlias $updateAlias,
        UpdatePaymentMeans $updatePaymentMeans
    ) {
        $this->updateAlias = $updateAlias;
        $this->updatePaymentMeans = $updatePaymentMeans;

        parent::__construct($requestConfig);
    }

    public function getUpdateAlias(): ?UpdateAlias
    {
        return $this->updateAlias;
    }

    public function setUpdateAlias(UpdateAlias $updateAlias): self
    {
        $this->updateAlias = $updateAlias;

        return $this;
    }

    public function getUpdatePaymentMeans(): ?UpdatePaymentMeans
    {
        return $this->updatePaymentMeans;
    }

    public function setUpdatePaymentMeans(UpdatePaymentMeans $updatePaymentMeans): self
    {
        $this->updatePaymentMeans = $updatePaymentMeans;

        return $this;
    }
}
