<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\SecureAliasStore;

use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertDirectResponse;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasInsertDirectRequestTest extends CommonRequestTest
{
    public function getInstance()
    {
        return new AliasInsertDirectRequest(
            $this->getRequestConfig(),
            new RegisterAlias(),
            new PaymentMeans()
        );
    }
}
