<?php

declare(strict_types = 1);

namespace App\Domain\Model\Library;

interface LibraryRepositoryInterface
{
    public function add(Library $library);

    public function findById(LibraryId $libraryId): Library;

    public function remove(Library $library);
}