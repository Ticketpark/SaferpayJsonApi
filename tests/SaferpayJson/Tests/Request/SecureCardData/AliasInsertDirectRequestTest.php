<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Request\SecureCardData;

use Ticketpark\SaferpayJson\Request\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Tests\Request\CommonRequestTest;

class AliasInsertDirectRequestTest extends CommonRequestTest
{
    public function getInstance()
    {
        return new AliasInsertDirectRequest(
            $this->getRequestConfig(),
            new RegisterAlias(RegisterAlias::ID_GENERATOR_RANDOM),
            new PaymentMeans()
        );
    }
}
