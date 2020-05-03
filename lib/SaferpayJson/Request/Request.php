<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Ticketpark\SaferpayJson\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Container\RequestHeader;
use Ticketpark\SaferpayJson\Exception\SaferpayErrorResponseException;
use Ticketpark\SaferpayJson\Response\ErrorResponse;
use Ticketpark\SaferpayJson\Response\Response;

abstract class Request
{
    private const ROOT_URL = 'https://www.saferpay.com/api/';
    private const ROOT_URL_TEST = 'https://test.saferpay.com/api/';

    private const ERROR_RESPONSE_CLASS = ErrorResponse::class;

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
    abstract public function execute(): Response;

    public function __construct(RequestConfig $requestConfig)
    {
        $this->requestConfig = $requestConfig;
    }

    public function getRequestConfig(): RequestConfig
    {
        return $this->requestConfig;
    }

    public function getRequestHeader(): RequestHeader
    {
        return new RequestHeader(
            $this->requestConfig->getCustomerId()
        );
    }

    protected function doExecute(): Response
    {
        try {
            /** @var GuzzleResponse $response */
            $response = $this->requestConfig->getClient()->post(
                $this->getUrl(),
                [
                    'headers' => $this->getHeaders(),
                    'body' => $this->getContent()
                ]
            );
        } catch (\Exception $e) {
            if ($e instanceof ClientException) {
                /** @var GuzzleResponse $response */
                $response = $e->getResponse();
            } else {
                throw new HttpRequestException($e->getMessage());
            }
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {

            /** @var ErrorResponse $errorResponse */
            $errorResponse = $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
                'json'
            );

            throw new SaferpayErrorResponseException($errorResponse);
        }

        if (200 !== $statusCode) {
            throw new HttpRequestException(sprintf(
                'Unexpected http request response with status code %s.',
                $response->getStatusCode()
            ));
        }

        /** @var Response $response */
        $response = $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            $this->getResponseClass(),
            'json'
        );

        return $response;
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
