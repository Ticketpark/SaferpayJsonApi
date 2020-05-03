<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;

final class AliasDeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';
    const RESPONSE_CLASS = AliasDeleteResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("AliasId")
     */
    private $aliasId;

    public function __construct(RequestConfig $requestConfig, string $aliasId)
    {
        $this->aliasId = $aliasId;

        parent::__construct($requestConfig);
    }

    public function getAliasId(): string
    {
        return $this->aliasId;
    }

    public function setAliasId(string $aliasId): self
    {
        $this->aliasId = $aliasId;

        return $this;
    }

    public function execute(): AliasDeleteResponse
    {
        /** @var AliasDeleteResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
