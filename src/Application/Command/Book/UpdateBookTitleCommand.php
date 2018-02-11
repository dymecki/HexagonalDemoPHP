<?php

declare(strict_types = 1);

namespace App\Application\Command\Book;

use App\Application\Command\CommandInterface;

final class UpdateBookTitleCommand implements CommandInterface
{
    private $id;
    private $title;

    public function __construct($id, string $title)
    {
        $this->id    = $id;
        $this->title = $title;
    }

    public function id()
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }
}