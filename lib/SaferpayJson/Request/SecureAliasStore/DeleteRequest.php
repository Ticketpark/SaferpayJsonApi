<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\DeleteResponse;

class DeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';
    const RESPONSE_CLASS = DeleteResponse::class;

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
