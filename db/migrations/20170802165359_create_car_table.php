<?php

use Phinx\Migration\AbstractMigration;

class CreateCarTable extends AbstractMigration
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
        $this->execute('CREATE TABLE "Cars" (
            "carId" UUID PRIMARY KEY NOT NULL,
            brand TEXT NOT NULL,
            model TEXT NOT NULL,
            --fuelAmount DECIMAL NOT NULL,
            --fuelUnit TEXT NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT current_timestamp,
            updated_at TIMESTAMP
        )');
    }
}
