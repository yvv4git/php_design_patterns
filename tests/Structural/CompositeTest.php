<?php

namespace Tests\Structural;

use DesignPatterns\Stuctural\Composite_v1\Composite\CoffeMashine;
use DesignPatterns\Stuctural\Composite_v1\Composite\Components\Сream;
use DesignPatterns\Stuctural\Composite_v1\Composite\Components\Coffee;
use PHPUnit\Framework\TestCase;

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