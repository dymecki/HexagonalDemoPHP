<?php

declare(strict_types = 1);

namespace App\Infrastructure\Service;

use JMS\Serializer\SerializerBuilder;

final class Serializer
{
    public static function serialize($data): string
    {
        return SerializerBuilder::create()->build()->serialize($data, 'json');
    }

    public static function unserialize()
    {

    }
}