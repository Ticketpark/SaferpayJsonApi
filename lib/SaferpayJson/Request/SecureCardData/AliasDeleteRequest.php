<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;

class AliasDeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';
    const RESPONSE_CLASS = AliasDeleteResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("AliasId")
     */
    protected $aliasId;

    public function getAliasId(): string
    {
        return $this->aliasId;
    }

    public function setAliasId(string $aliasId): self
    {
        $this->aliasId = $aliasId;

        return $this;
    }
}
