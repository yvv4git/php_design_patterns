<?php

namespace Tests;

use DesignPatterns\ObjectPool\Factory;
use DesignPatterns\ObjectPool\Product;
use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{
    public function testObjectPool()
    {
        // Кладем наши объекты в object pool.
        Factory::pushPruduct(new Product(1));
        Factory::pushPruduct(new Product(2));

        // Проверяем, что у нас лежит в object pool.
        $this->assertSame(1, Factory::popProduct(1)->getId());
        $this->assertSame(2, Factory::popProduct(2)->getId());
    }
}