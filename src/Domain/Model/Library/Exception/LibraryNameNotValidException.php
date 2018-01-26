<?php

declare(strict_types = 1);

namespace App\Domain\Model\Library\Exception;

final class LibraryNameNotValidException extends \Exception
{
    public function __construct($title)
    {
        parent::__construct('Library name is not valid: ' . $title);
    }
}
