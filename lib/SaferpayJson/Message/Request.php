<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Message;

use Buzz\Browser;
use Doctrine\Common\Annotations\AnnotationRegistry;
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
     * @var Buzz\Browser
     * @Exclude
     */
    protected $browser;

    /**
     * @var Ticketpark\SaferpayJson\Container\RequestHeader
     * @SerializedName("RequestHeader")
     */
    protected $requestHeader;

    public function __construct(
        string $apiKey = null,
        string $apiSecret  = null,
        bool $test = true,
        Browser $browser = null
    ) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->test = $test;

        $this->setBrowser($browser);
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

    public function setBrowser(Browser $browser = null)
    {
        $this->browser = $browser;

        return $this;
    }

    public function getBrowser(): Browser
    {
        if (null == $this->browser) {
            return new Browser();
        }

        return $this->browser;
    }

    public function execute(): Response
    {
        try {
            $response = $this->getBrowser()->post(
                $this->getUrl(),
                $this->getHeaders(),
                $this->getContent()
            );
        } catch (\Exception $e) {
            throw new HttpRequestException($e->getMessage());
        }

        if ($response->isClientError()) {
            return $this->getSerializer()->deserialize($response->getContent(), static::ERROR_RESPONSE_CLASS, 'json');
        }

        if (200 !== $response->getStatusCode()) {
            throw new HttpRequestException(sprintf('Unexpected http request response with status code %s.', $response->getStatusCode()));
        }

        return $this->getSerializer()->deserialize($response->getContent(), static::RESPONSE_CLASS, 'json');
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
        return array(
            'Content-Type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
            'Authorization' => 'Basic ' . base64_encode($this->apiKey.':'.$this->apiSecret)
        );
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
