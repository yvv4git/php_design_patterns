<?php

namespace Tests;

use DesignPatterns\Creational\Registry\Priora;
use DesignPatterns\Creational\Registry\ProductRegistry;
use DesignPatterns\Creational\Registry\Vesta;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    private static $registry;

    public static function setUpBeforeClass(): void
    {
        self::$registry = new ProductRegistry;
    }

    public function testPriora()
    {
        self::$registry->set(1, new Priora);
        $product = self::$registry->get(1);
        
        $this->assertInstanceOf(Priora::class, $product);
        $this->assertSame('Priora', $product->getProductName());
    }

    public function testVesta()
    {
        self::$registry->set(2, new Vesta);
        $product = self::$registry->get(2);
        
        $this->assertInstanceOf(Vesta::class, $product);
        $this->assertSame('Vesta', $product->getProductName());
    }
}