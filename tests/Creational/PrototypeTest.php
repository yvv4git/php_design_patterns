<?php

namespace Tests;

use DesignPatterns\Creational\Prototype\Factory;
use DesignPatterns\Creational\Prototype\Priora;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCloneProduct()
    {
        // new Priora - наш изначальный объект, который может иметь
        // массу полезных свойств, которые необходимо скопировать.
        $carFactory = new Factory(new Priora);
        $firstCar = $carFactory->getCar();
        $secondCar = $carFactory->getCar();

        $this->assertSame('Priora', $firstCar->getCarName());
        $this->assertSame('Priora', $secondCar->getCarName());

        // Еслиб это был один и тот же объект, то в итоге его название стало бы 'Priora-v2'
        $firstCar->setCarName('Priora-v1');
        $secondCar->setCarName('Priora-v2');

        // Тесты показывают, что это ссылки на разные объекты. 
        // Следовательно клонирование отработало.
        $this->assertSame('Priora-v1', $firstCar->getCarName());
        $this->assertSame('Priora-v2', $secondCar->getCarName());
    }
}