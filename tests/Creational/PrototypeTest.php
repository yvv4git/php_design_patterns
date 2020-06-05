<?php

namespace Tests;

use DesignPatterns\Prototype\Factory;
use DesignPatterns\Prototype\Priora;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCloneProduct()
    {
        $carFactory = new Factory(new Priora);
        $firstCar = $carFactory->getCar();
        $secondCar = $carFactory->getCar();

        $this->assertSame('Priora', $firstCar->getCarName());
        $this->assertSame('Priora', $secondCar->getCarName());

        $firstCar->setCarName('Priora-v1');
        $secondCar->setCarName('Priora-v2');

        $this->assertSame('Priora-v1', $firstCar->getCarName());
        $this->assertSame('Priora-v2', $secondCar->getCarName());
    }
}