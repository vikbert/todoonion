<?php

declare(strict_types = 1);

namespace App\Tests\Core\Domain\Model;

use App\Core\Domain\Model\Todo;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\Uuid;

class TodoTest extends TestCase
{
    public function testCreateWithoutDescription(): void
    {
        $todo = Todo::create('code review');

        $this->assertEquals('code review', $todo->getTitle());
        $this->assertEmpty($todo->getDescription());
        $this->assertTrue(Uuid::isValid((string) $todo->getId()));
    }
}
