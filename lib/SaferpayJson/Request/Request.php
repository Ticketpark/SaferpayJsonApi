<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Ticketpark\SaferpayJson\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Container\RequestHeader;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\ResponseInterface;

abstract class Request
{
    const ROOT_URL = 'https://www.saferpay.com/api/';

    const ROOT_URL_TEST = 'https://test.saferpay.com/api/';

    const ERROR_RESPONSE_CLASS = ErrorResponse::class;

    /**
     * @var string
     * @Exclude
     */
    protected $apiKey;

    /**
     * @var string
     * @Exclude
     */
    protected $apiSecret;

    /**
     * @var bool
     * @Exclude
     */
    protected $test = false;

    /**
     * @var \GuzzleHttp\Client
     * @Exclude
     */
    protected $client;

    /**
     * @var RequestHeader
     * @SerializedName("RequestHeader")
     */
    protected $requestHeader;

    public function __construct(
        string $apiKey,
        string $apiSecret,
        bool $test = true
    ) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->test = $test;
    }

    abstract public function getApiPath(): string;
    abstract public function getResponseClass(): string;

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    public function setApiSecret(string $apiSecret): self
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    public function isTest(): bool
    {
        return $this->test;
    }

    public function setTest(bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getRequestHeader(): RequestHeader
    {
        return $this->requestHeader;
    }

    public function setRequestHeader(RequestHeader $requestHeader): self
    {
        $this->requestHeader = $requestHeader;

        return $this;
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): Client
    {
        if (null == $this->client) {
            return new Client();
        }

        return $this->client;
    }

    public function execute(): ResponseInterface
    {
        try {
            $response = $this->getClient()->post(
                $this->getUrl(),
                [
                    'headers' => $this->getHeaders(),
                    'body' => $this->getContent(),
                ]
            );
        } catch (\Exception $e) {
            if (! $e instanceof ClientException) {
                throw new HttpRequestException($e->getMessage());
            }

            $response = $e->getResponse();
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {
            /** @var ResponseInterface $responseData */
            $responseData = $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
                'json'
            );
            return $responseData;
        }

        if (200 !== $statusCode) {
            throw new HttpRequestException(sprintf(
                'Unexpected http request response with status code %s.',
                $response->getStatusCode()
            ));
        }

        /** @var ResponseInterface $responseData */
        $responseData = $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            $this->getResponseClass(),
            'json'
        );
        return $responseData;
    }

    protected function getUrl(): string
    {
        $rootUrl = self::ROOT_URL;

        if ($this->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        }

        return $rootUrl . $this->getApiPath();
    }

    protected function getHeaders(): array
    {
        return [
            'Content-Type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
            'Authorization' => 'Basic ' . base64_encode($this->apiKey.':'.$this->apiSecret)
        ];
    }

    protected function getContent(): string
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    protected function getSerializer(): SerializerInterface
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
