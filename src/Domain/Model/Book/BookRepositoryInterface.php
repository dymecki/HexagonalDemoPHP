<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book;

interface BookRepositoryInterface
{
    public function add(Book $book);

    public function findById(BookId $bookId): Book;

    public function remove(Book $book);
}