<?php

namespace Tests\Creational;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Config;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testAbstractFactory()
    {
        $firstProduct = AbstractFactory::getFactory()->getProduct();
        
        // меняем family объектов.
        Config::$factory = 2;

        $secondproduct = AbstractFactory::getFactory()->getProduct();

        $this->assertSame('The product from the first factory', $firstProduct->getName());
        $this->assertSame('The product from second factory', $secondproduct->getName());
    }
}