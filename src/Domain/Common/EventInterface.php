<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Common;

interface EventInterface
{
    public function name(): string;
}