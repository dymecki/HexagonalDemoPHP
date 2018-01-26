<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Exception;

final class BookTitleNotValidException extends \Exception
{
    public function __construct($title)
    {
        parent::__construct('Book title is not valid: ' . $title);
    }
}
