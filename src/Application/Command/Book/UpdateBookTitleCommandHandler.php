<?php

declare(strict_types = 1);

namespace App\Application\Command\User;

use App\Application\Command\CommandInterface;
use App\Application\Command\CommandHandlerInterface;
use App\Domain\Model\Book\Book;
use App\Infrastructure\Persistence\InMemory\BookInMemoryRepository;

final class UpdateBookTitleCommandHandler implements CommandHandlerInterface
{
    public function handle(CommandInterface $command)
    {
//        $book = Book::findById($command->id());

//        $book->

//        (new BookInMemoryRepository)->add($book);

//        return $book;
    }
}