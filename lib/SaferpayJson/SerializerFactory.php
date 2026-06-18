<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

final class SerializerFactory
{
    private static ?SerializerInterface $serializer = null;

    public static function get(): SerializerInterface
    {
        if (null === self::$serializer) {
            self::$serializer = SerializerBuilder::create()->build();
        }

        return self::$serializer;
    }
}
