<?php

use Phinx\Migration\AbstractMigration;

class CreateEventsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->execute('CREATE TABLE "EventStore" (
            "eventId" BIGSERIAL PRIMARY KEY NOT NULL,
            "AggregateType" TEXT NOT NULL,
            "AggregateId" UUID NOT NULL,
            version INT NOT NULL,
            data JSONB NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT current_timestamp
        )');
    }
}
