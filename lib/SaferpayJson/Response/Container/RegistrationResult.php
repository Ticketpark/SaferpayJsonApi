<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RegistrationResult
{
    /**
     * @var bool|null
     * @SerializedName("Success")
     * @Type("boolean")
     */
    private $success;

    /**
     * @var Alias|null
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Alias")
     */
    private $alias;

    /**
     * @var Error|null
     * @SerializedName("Error")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Error")
     */
    private $error;

    /**
     * @var AuthenticationResult|null
     * @SerializedName("AuthenticationResult")
     * @Type("Ticketpark\SaferpayJson\Response\Container\AuthenticationResult")
     */
    private $authenticationResult;

    public function isSuccess(): ?bool
    {
        return $this->success;
    }

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function getAuthenticationResult(): ?AuthenticationResult
    {
        return $this->authenticationResult;
    }
}
