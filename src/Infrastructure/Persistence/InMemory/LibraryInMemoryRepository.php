<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Model\Library\Library;
use App\Domain\Model\Library\LibraryId;
use App\Domain\Model\Library\LibraryRepositoryInterface;

final class LibraryInMemoryRepository implements LibraryRepositoryInterface
{
    private $repository = [];

    public function add(Library $library)
    {
        $this->repository[(string) $library->id()] = $library;
    }

    public function findById(LibraryId $libraryId): Library
    {
        if (isset($this->repository[(string) $libraryId])) {
            return $this->repository[(string) $libraryId];
        }

        throw new \Exception('No library in the repository for LibraryId: ' . $libraryId);
    }

    public function remove(Library $library): void
    {
        unset($this->repository[(string) $library->id()]);
    }
}
