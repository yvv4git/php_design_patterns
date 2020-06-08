<?php

namespace Test;

use DesignPatterns\Creational\LazyInitialization\Factory;
use PHPUnit\Framework\TestCase;

class LazyInitializationTest extends TestCase
{
    public function testLazyInitialization()
    {
        $factory = new Factory;
        
        $this->assertSame('The first product', $factory->getFirstProduct()->getName());
        $this->assertSame('Second product', $factory->getSecondProduct()->getName());
    }
}