<?php

namespace Tests;

use DesignPatterns\Creational\Builder\Factory;
use DesignPatterns\Creational\Builder\FirstBuilder;
use DesignPatterns\Creational\Builder\SecondBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuilder()
    {
        $firstDirector = new Factory(new FirstBuilder());
        $secondDirector = new Factory(new SecondBuilder());

        $this->assertSame('The product of the first builder', $firstDirector->getProduct()->getName());
        $this->assertSame('The product of second builder', $secondDirector->getProduct()->getName());
    }
}