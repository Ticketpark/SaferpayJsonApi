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
            $builder = SerializerBuilder::create();
            $builder->enableEnumSupport();

            self::$serializer = $builder->build();
        }

        return self::$serializer;
    }
}
