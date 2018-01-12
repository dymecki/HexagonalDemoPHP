<?php

declare(strict_types = 1);

namespace App\Tests\Domain\Model\User;

use App\Domain\Model\User\UserId;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class UserIdTest extends TestCase
{
    public function testProperId()
    {
        $uuid   = Uuid::uuid4();
        $userId = new UserId($uuid);

        $this->assertEquals($uuid, $userId->id());
    }

    public function testUserIdToString()
    {
        $uuid   = Uuid::uuid4();
        $userId = new UserId($uuid);

        $this->assertEquals($uuid->toString(), (string) $userId);
    }

    public function testUserIdFromString()
    {
        $uuid   = Uuid::uuid4();
        $userId = UserId::fromString($uuid->toString());

        $this->assertEquals($uuid->toString(), $userId->id());
    }
}
