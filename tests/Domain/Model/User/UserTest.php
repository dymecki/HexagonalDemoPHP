<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Tests\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\Model\User\Email;
use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Domain\Model\User\UserName;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        $this->user = User::register('Michał', 'michal@dymecki.com');
    }

    public function testUserName()
    {
        $userName = new UserName('Michał');
        $this->assertEquals($this->user->name(), $userName);
    }

    public function testEmail()
    {
        $email = new Email('michal@dymecki.com');
        $this->assertEquals($this->user->email(), $email);
    }
}
