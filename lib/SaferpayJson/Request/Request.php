<?php

namespace Ticketpark\SaferpayJson\Request;

use Buzz\Browser;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\SerializerBuilder;
use Ticketpark\SaferpayJson\Request\RequestHeader;


abstract class Request
{
    const ROOT_URL = 'https://www.saferpay.com/api/';

    const ROOT_URL_TEST = 'https://test.saferpay.com/api/';

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
     * @var Ticketpark\SaferpayJson\Request\RequestHeader
     * @SerializedName("RequestHeader")
     */
    protected $requestHeader;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $apiSecret
     * @param bool $test
     */
    public function __construct($apiKey, $apiSecret, $test = true)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->test = $test;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Request
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @param string $apiSecret
     * @return Request
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @param boolean $test
     * @return Request
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Request\RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * @param Ticketpark\SaferpayJson\Request\RequestHeader $requestHeader
     * @return Request
     */
    public function setRequestHeader(RequestHeader $requestHeader)
    {
        $this->requestHeader = $requestHeader;

        return $this;
    }

    /**
     * Run request
     */
    public function run()
    {
        $browser = new Browser();
        $response = $browser->post(
            $this->getUrl(),
            $this->getHeaders(),
            $this->getContent()
        );

        return $this->getSerializer()->deserialize($response->getContent(), static::RESPONSE_CLASS, 'json');
    }

    /**
     * Get url of request
     *
     * @return string
     */
    protected function getUrl()
    {
        $rootUrl = self::ROOT_URL;

        if ($this->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        }

        return $rootUrl . static::API_PATH;
    }

    /**
     * Get headers of request
     *
     * @return array
     */
    protected function getHeaders()
    {
        return array(
            'Content-Type'  => 'application/json; charset=utf-8',
            'Accept'        => 'application/json',
            'Authorization' => 'Basic ' . base64_encode($this->apiKey.':'.$this->apiSecret)
        );
    }

    /**
     * Get content of request
     *
     * @return string
     */
    protected function getContent()
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    /**
     * Get serializer
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getSerializer()
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}