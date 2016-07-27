<?php

namespace Ticketpark\SaferpayJson\Tests\Transaction;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use Ticketpark\SaferpayJson\Transaction\QueryPaymentMeansRequest;

class QueryPaymentMeansRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testErrorResponse()
    {
        $QueryPaymentMeansr = new QueryPaymentMeansRequest();
        $QueryPaymentMeansr->setBrowser($this->getBrowserMock(false));
        $response = $QueryPaymentMeansr->execute();

        $this->assertInstanceOf('Ticketpark\SaferpayJson\Message\ErrorResponse', $response);
    }

    public function testSuccessfulResponse()
    {
        $QueryPaymentMeansr = new QueryPaymentMeansRequest();
        $QueryPaymentMeansr->setBrowser($this->getBrowserMock(true));
        $response = $QueryPaymentMeansr->execute();

        $this->assertInstanceOf('Ticketpark\SaferpayJson\Transaction\QueryPaymentMeansResponse', $response);
    }

    public function getBrowserMock($successful)
    {
        $browser = $this->getMockBuilder('Buzz\Browser')
            ->disableOriginalConstructor()
            ->setMethods(array('post'))
            ->getMock();

        $browser->expects($this->once())
            ->method('post')
            ->will($this->returnValue($this->getResponseMock($successful)));

        return $browser;
    }

    public function getResponseMock($successful)
    {
        $response = $this->getMockBuilder('Buzz\Message\Response')
            ->disableOriginalConstructor()
            ->setMethods(array('getStatusCode', 'isClientError', 'getContent'))
            ->getMock();

        $response->expects($this->any())
            ->method('isClientError')
            ->will($this->returnValue(!$successful));

        $response->expects($this->any())
            ->method('getStatusCode')
            ->will($this->returnValue(200));

        if ($successful) {
            $content = $this->getFakedApiResponse('Ticketpark\SaferpayJson\Transaction\QueryPaymentMeansResponse');
        } else {
            $content = $this->getFakedApiResponse('Ticketpark\SaferpayJson\Message\ErrorResponse');
        }

        $response->expects($this->any())
            ->method('getContent')
            ->will($this->returnValue($content));

        return $response;
    }

    public function getFakedApiResponse($class)
    {
        AnnotationRegistry::registerLoader('class_exists');
        $serializer = SerializerBuilder::create()->build();

        $response = new $class();

        return $serializer->serialize($response, 'json');
    }
}