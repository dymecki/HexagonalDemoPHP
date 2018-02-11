<?php

declare(strict_types = 1);

namespace App\Application\Command\Book;

use App\Application\Command\CommandInterface;

final class CreateBookCommand implements CommandInterface
{
    private $title;
    private $author;
    private $isbn;

    public function __construct(string $title, string $author, string $isbn)
    {
        $this->title  = $title;
        $this->author = $author;
        $this->isbn   = $isbn;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function isbn(): string
    {
        return $this->isbn;
    }
}