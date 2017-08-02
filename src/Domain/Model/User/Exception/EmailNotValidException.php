<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\User\Exception;

final class EmailNotValidException extends \Exception
{
    public function __construct($email)
    {
        parent::__construct('Email address is not valid: ' . $email);
    }
}
