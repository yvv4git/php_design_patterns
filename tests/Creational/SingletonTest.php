<?php declare(strict_types=1);

namespace Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testItsSingle(): void
    {
        $callFirst = Singleton::getInstance();
        $callSecond = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $callFirst);
        $this->assertSame($callFirst, $callSecond);
    }
}
