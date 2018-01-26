<?php

declare(strict_types = 1);

namespace App\Application\Command\User;

use App\Application\Command\CommandInterface;

final class RegisterBookCommand implements CommandInterface
{
    private $title;
    private $isbn;

    public function __construct(string $title, string $isbn)
    {
        $this->title = $title;
        $this->isbn  = $isbn;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function isbn(): string
    {
        return $this->isbn;
    }
}