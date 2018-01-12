<?php

declare(strict_types = 1);

namespace App\Domain;

use App\Infrastructure\Persistence\Repository\InMemory\UserInMemoryRepository;

final class DomainRegistry
{
    private $pageRepository;

    private function __construct()
    {
        $this->pageRepository = new UserInMemoryRepository;
    }

    public function pageRepository()
    {
        return $this->pageRepository;
    }


    private static $instance = null;
    private static $registry = [];

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    //public static function add($key, $value)
    //{
    //    if (isset(self::$registry[$key])) {
    //        throw new \Exception('There is already an entry for key ' . $key);
    //    }
    //
    //    self::$registry[$key] = $value;
    //}

    public static function get($key)
    {
        if ( ! isset(self::$registry[$key])) {
            throw new \Exception('There is no entry for key ' . $key);
        }

        return self::$registry[$key];
    }

    private function __clone()
    {
    }
}
