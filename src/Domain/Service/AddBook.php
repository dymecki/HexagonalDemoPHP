<?php

declare(strict_types = 1);

namespace App\Domain\Model\Service;

use App\Domain\Model\Book\Book;

final class AddBook
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }


}