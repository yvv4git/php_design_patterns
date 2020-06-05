<?php

namespace Tests;

use DesignPatterns\Builder\Factory;
use DesignPatterns\Builder\FirstBuilder;
use DesignPatterns\Builder\SecondBuilder;
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