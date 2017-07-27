<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\AggregateRootInterface;

final class Car implements AggregateRootInterface
{
    private $manufacturer;
    private $model;
    private $fuelAmount;

    public function id()
    {
        // TODO: Implement id() method.
    }

    public function record($event)
    {
        // TODO: Implement record() method.
    }

    public function release()
    {
        // TODO: Implement release() method.
    }
}
