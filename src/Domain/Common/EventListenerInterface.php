<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Common;

interface EventListenerInterface
{
    public function handle(EventInterface $event);
}