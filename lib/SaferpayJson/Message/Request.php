<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Message;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Ticketpark\SaferpayJson\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Container\RequestHeader;

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
     * @var Ticketpark\SaferpayJson\Container\RequestHeader
     * @SerializedName("RequestHeader")
     */
    protected $requestHeader;

    public function __construct(
        string $apiKey = null,
        string $apiSecret  = null,
        bool $test = true
    ) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->test = $test;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey): self
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

    public function setClient(Client $client = null)
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

    public function execute(): Response
    {
        try {
            $response = $this->getClient()->post(
                $this->getUrl(),
                [
                    'headers' => $this->getHeaders(),
                    'body' => $this->getContent()
                ]
            );
        } catch (\Exception $e) {
            throw new HttpRequestException($e->getMessage());
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {
            return $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                static::ERROR_RESPONSE_CLASS,
                'json'
            );
        }

        if (200 !== $statusCode) {
            throw new HttpRequestException(sprintf(
                'Unexpected http request response with status code %s.',
                $response->getStatusCode()
            ));
        }

        return $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            static::RESPONSE_CLASS,
            'json'
        );
    }

    protected function getUrl(): string
    {
        $rootUrl = self::ROOT_URL;

        if ($this->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        }

        return $rootUrl . static::API_PATH;
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

    protected function getSerializer(): Serializer
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
