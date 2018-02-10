<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\EventStore;

use App\Domain\Event\Event;
use App\Infrastructure\Service\Serializer;
use Ramsey\Uuid\Uuid;

final class PdoEventStore
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new \PDO('pgsql:host=localhost;port=5432;dbname=HexagonalDemo;user=homestead;password=secret');
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function add(Event $event)
    {
        $aggregateType = rtrim(array_reverse(explode('\\', get_class($event)))[0], 'Event');
        $aggregateId   = '7e622e4f-8b6e-4e26-bd34-1735d1c1d0e2';
        $version       = 1;
        $data          = Serializer::serialize($event);

//        var_dump($event);
//        exit;

        $stmt = $this->db->prepare('
            INSERT INTO "EventStore" ("AggregateType", "AggregateId", version, data) 
            VALUES (:aggregateType, :aggregateId, :version, :data)
        ');

        $stmt->bindParam(':aggregateType', $aggregateType);
        $stmt->bindParam(':aggregateId', $aggregateId);
        $stmt->bindParam(':version', $version);
        $stmt->bindParam(':data', $data);
        $stmt->execute();
    }
}
