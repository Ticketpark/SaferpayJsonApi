<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class DeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\DeleteResponse';

    /**
     * @var string
     * @SerializedName("AliasId")
     */
    protected $aliasId;

    /**
     * @return string
     */
    public function getAliasId()
    {
        return $this->aliasId;
    }

    /**
     * @param string $aliasId
     * @return DeleteRequest
     */
    public function setAliasId($aliasId)
    {
        $this->aliasId = $aliasId;

        return $this;
    }
}