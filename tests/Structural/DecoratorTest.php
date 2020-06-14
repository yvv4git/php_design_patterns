<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Decorator\MilkCoffee;
use DesignPatterns\Stuctural\Decorator\SimpleCoffee;
use DesignPatterns\Stuctural\Decorator\VanillaCoffee;

class DecoratorTest extends TestCase
{
    private static $simpleCoffe;

    public static function setUpBeforeClass(): void
    {
        self::$simpleCoffe = new SimpleCoffee();
    }


    public function testSimpleCoffe()
    {
        $this->assertSame('Coffee', self::$simpleCoffe->getDescription());
        $this->assertSame(10.0, self::$simpleCoffe->getCost());
    }

    public function testMilkCoffe()
    {
        // Испольузем декоратор для обычного кофе.
        $milkCoffee = new MilkCoffee(self::$simpleCoffe);
        $this->assertSame('Coffee, with milk', $milkCoffee->getDescription());
        $this->assertSame(12.0, $milkCoffee->getCost());
    }

    public function testVaillaCoffee()
    {
        // Можно использовать цепочку декораторов.
        $vanillaMilkCoffee = new VanillaCoffee(new MilkCoffee(new SimpleCoffee()));
        $this->assertSame('Coffee, with milk, with vanilla', $vanillaMilkCoffee->getDescription());
        $this->assertSame(15.0, $vanillaMilkCoffee->getCost());
    }
}