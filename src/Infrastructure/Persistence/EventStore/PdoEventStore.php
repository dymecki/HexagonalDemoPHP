<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\EventStore;

use App\Domain\Event\Event;
use App\Infrastructure\Service\Serializer;

final class PdoEventStore
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new \PDO('pgsql:host=localhost;port=54320;dbname=HexagonalDemo;user=homestead;password=secret');
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function add(Event $event)
    {
        $aggregateType = 'BookTitleWasUpdated';
        $aggregateId   = md5();
        $version       = 1;
        $data          = Serializer::serialize($event);

        $stmt = $this->db->prepare('INSERT INTO "EventStore" (AggregateType, AggregateId, version, data) VALUES (:aggregateType, :aggregateId, :version, :data)');
        $stmt->bindParam(':aggregateType', $aggregateType);
        $stmt->bindParam(':aggregateId', $aggregateId);
        $stmt->bindParam(':version', $version);
        $stmt->bindParam(':data', $data);
        $stmt->execute();
    }
}
