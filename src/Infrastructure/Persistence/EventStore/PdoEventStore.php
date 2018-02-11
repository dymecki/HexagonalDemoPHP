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
        $aggregateType = $event->name();
        $aggregateId   = $event->aggregateId();
        $version       = 1;
        $data          = Serializer::serialize($event);

        $stmt = $this->db->prepare('
            INSERT INTO "EventStore" ("eventType", "aggregateId", version, data) 
            VALUES (:aggregateType, :aggregateId, :version, :data)
        ');

        $stmt->bindParam(':aggregateType', $aggregateType);
        $stmt->bindParam(':aggregateId', $aggregateId);
        $stmt->bindParam(':version', $version);
        $stmt->bindParam(':data', $data);
        $stmt->execute();
    }
}
