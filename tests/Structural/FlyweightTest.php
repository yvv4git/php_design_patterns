<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Flyweight\ShoppingCart;
use DesignPatterns\Stuctural\Flyweight\ProductFactory;

class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->addProduct('Sports shoes', 120, 'Nike', 'Nike.png');
        $shoppingCart->addProduct('Kids shoes', 100, 'Nike', 'Nike.png');
        $shoppingCart->addProduct('Women shoes', 110, 'Nike', 'Nike.png');
        $shoppingCart->addProduct('Running shoes', 140, 'Asics', 'Asics.jpg');
        $shoppingCart->addProduct('Everyday shoes', 90, 'Adidas', 'Adidas.svg');
        
        // Количество продуктов.
        $this->assertSame(5, count($shoppingCart->getProducts()));

        // Количество брендов.
        $this->assertSame(3, count(ProductFactory::$brandTypes));
    }
}