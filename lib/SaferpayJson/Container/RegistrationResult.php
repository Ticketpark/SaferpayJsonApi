<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RegistrationResult
{
    /**
     * @var bool
     * @SerializedName("Success")
     * @Type("boolean")
     */
    protected $success;

    /**
     * @var Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @var Error
     * @SerializedName("Error")
     * @Type("Ticketpark\SaferpayJson\Container\Error")
     */
    protected $error;

    /**
     * @var AuthenticationResult
     * @SerializedName("AuthenticationResult")
     * @Type("Ticketpark\SaferpayJson\Container\AuthenticationResult")
     */
    protected $authenticationResult;

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    public function getAlias(): Alias
    {
        return $this->alias;
    }

    public function setAlias(Alias $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setError(Error $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getAuthenticationResult(): ?AuthenticationResult
    {
        return $this->authenticationResult;
    }

    public function setAuthenticationResult(AuthenticationResult $authenticationResult): self
    {
        $this->authenticationResult = $authenticationResult;

        return $this;
    }
}
