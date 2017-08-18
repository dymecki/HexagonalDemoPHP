<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Tests\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\Model\User\UserName;
use PHPUnit\Framework\TestCase;

class UserNameTest extends TestCase
{
    private $obj;

    public function setUp(): void
    {
        $this->obj = new UserName('Michał');
    }

    public function testAssertUserName()
    {
        $this->assertEquals($this->obj->name(), 'Michał');
    }

    public function testAssertToString()
    {
        $this->assertEquals((string) $this->obj, 'Michał');
    }
}
