<?php

declare(strict_types = 1);

namespace App\Infrastructure\Service;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;

final class Serializer
{
    public static function serialize($data): string
    {
        return SerializerBuilder::create()
                                ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
                                ->build()
                                ->serialize($data, 'json');
    }

    public static function unserialize()
    {

    }
}