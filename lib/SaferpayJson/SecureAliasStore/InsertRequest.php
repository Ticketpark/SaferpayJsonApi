<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Message\Request;

class InsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Insert';

    const RESPONSE_CLASS = InsertResponse::class;

    /**
     * @var \Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var \Ticketpark\SaferpayJson\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Check
     * @SerializedName("Check")
     */
    protected $check;

    public function getRegisterAlias(): string
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReturnUrls(): ReturnUrls
    {
        return $this->returnUrls;
    }

    public function setReturnUrls(ReturnUrls $returnUrls): self
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }
}
