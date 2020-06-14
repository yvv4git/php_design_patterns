<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Composite\CoffeMashine;
use DesignPatterns\Stuctural\Composite\Components\Сream;
use DesignPatterns\Stuctural\Composite\Components\Coffee;

class CompositeTest extends TestCase
{
    public function testComposite()
    {
        $mashin = new CoffeMashine;
        
        // Добавляем нужные компоненты.
        $mashin->add(new Coffee);
        $mashin->add(new Сream);

        // Получаем нужный кофе.
        $actualValue = $mashin->getCoffe();

        $this->assertSame('кофе + сливки', $actualValue);
    }
}