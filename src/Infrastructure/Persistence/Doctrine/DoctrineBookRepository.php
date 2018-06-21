<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Model\Book\Book;
use App\Domain\Model\Book\BookId;
use App\Domain\Model\Book\BookRepositoryInterface;

final class DoctrineBookRepository implements BookRepositoryInterface
{
    private $repository = [];

    public function add(Book $book)
    {
        $this->repository[(string) $book->id()] = $book;
    }

    public function findById(BookId $bookId): Book
    {
        if (isset($this->repository[(string) $bookId])) {
            return $this->repository[(string) $bookId];
        }

        throw new \Exception('No book in the repository for BookId: ' . $bookId);
    }

    public function remove(Book $book): void
    {
        unset($this->repository[(string) $book->id()]);
    }
}
