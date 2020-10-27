<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Ticketpark\SaferpayJson\Request\Exception\HttpRequestException;
use Ticketpark\SaferpayJson\Request\Container\RequestHeader;
use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
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
     * We want the implementation to define the exact return type hint of the response.
     * In PHP 7.4 the return type hint here in the abstraction would therefore be Ticketpark\SaferpayJson\Response\Response,
     * as all other responses inherit from that class.
     * In PHP 7.3 this is not yet allowed. Therefore the return type is omitted and only provided as a PhpDoc in
     * order to satisfy static code analysis by PhpStan.
     *
     * @link https://wiki.php.net/rfc/covariant-returns-and-contravariant-parameters
     * @link https://stitcher.io/blog/new-in-php-74#improved-type-variance-rfc
     * @return mixed
     */
    abstract public function execute();

    abstract public function getApiPath(): string;

    /**
     * @phpstan-return  class-string
     */
    abstract public function getResponseClass(): string;

    public function __construct(RequestConfig $requestConfig)
    {
        $this->requestConfig = $requestConfig;
    }

    /**
     * @SerializedName("RequestHeader")
     * @VirtualProperty
     */
    public function getRequestHeader(): RequestHeader
    {
        return new RequestHeader(
            $this->requestConfig->getCustomerId()
        );
    }

    public function getRequestConfig(): RequestConfig
    {
        return $this->requestConfig;
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
            if (!$e instanceof ClientException) {
                throw new HttpRequestException($e->getMessage());
            }

            /** @var GuzzleResponse $response */
            $response = $e->getResponse();
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400 && $statusCode < 500) {

            /** @var ErrorResponse $errorResponse */
            $errorResponse = $this->getSerializer()->deserialize(
                (string) $response->getBody(),
                self::ERROR_RESPONSE_CLASS,
                'json'
            );

            throw new SaferpayErrorException($errorResponse);
        }

        if (200 !== $statusCode) {
            throw new HttpRequestException(sprintf(
                'Unexpected http request response with status code %s.',
                $response->getStatusCode()
            ));
        }

        /** @var Response $libraryResponse */
        $libraryResponse = $this->getSerializer()->deserialize(
            (string) $response->getBody(),
            $this->getResponseClass(),
            'json'
        );

        return $libraryResponse;
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
