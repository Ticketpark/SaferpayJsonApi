<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Exception\ClientException;
use JMS\Serializer\Annotation\Accessor;
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
     * @var RequestConfig
     * @Exclude
     */
    private $requestConfig;

    /**
     * @var RequestHeader
     * @SerializedName("RequestHeader")
     * @Accessor(getter="getRequestHeader")
     */
    private $requestHeader;

    abstract public function getApiPath(): string;
    abstract public function getResponseClass(): string;

    public function __construct(RequestConfig $requestConfig)
    {
        $this->requestConfig = $requestConfig;
    }

    public function getRequestConfig(): RequestConfig
    {
        return $this->requestConfig;
    }

    public function setRequestConfig(RequestConfig $requestConfig): self
    {
        $this->requestConfig = $requestConfig;

        return $this;
    }

    public function getRequestHeader(): RequestHeader
    {
        if (null === $this->requestHeader) {
            return new RequestHeader(
                $this->requestConfig->getCustomerId()
            );
        }

        return $this->requestHeader;
    }

    public function setRequestHeader(RequestHeader $requestHeader): self
    {
        $this->requestHeader = $requestHeader;

        return $this;
    }

    public function execute(): ResponseInterface
    {
        try {
            $response = $this->requestConfig->getClient()->post(
                $this->getUrl(),
                [
                    'headers' => $this->getHeaders(),
                    'body' => $this->getContent()
                ]
            );
        } catch (\Exception $e) {
            if ($e instanceof ClientException) {
                $response = $e->getResponse();
            } else {
                throw new HttpRequestException($e->getMessage());
            }
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {
            print (string) $response->getBody(); exit;
            return $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
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
            $this->getResponseClass(),
            'json'
        );
    }

    private function getUrl(): string
    {
        $rootUrl = self::ROOT_URL;

        if ($this->requestConfig->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        }

        return $rootUrl . $this->getApiPath();
    }

    private function getHeaders(): array
    {
        return [
            'Content-Type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(
                $this->requestConfig->getApiKey()
                . ':'
                . $this->requestConfig->getApiSecret()
            )
        ];
    }

    private function getContent(): string
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    private function getSerializer(): SerializerInterface
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
