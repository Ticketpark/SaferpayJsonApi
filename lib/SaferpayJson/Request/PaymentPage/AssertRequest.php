<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;

final class AssertRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Assert';
    const RESPONSE_CLASS = AssertResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("Token")
     */
    private $token;

    public function __construct(
        RequestConfig $requestConfig,
        string $token
    ) {
        $this->token = $token;

        parent::__construct($requestConfig);
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function execute(): AssertResponse
    {
        /** @var AssertResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
