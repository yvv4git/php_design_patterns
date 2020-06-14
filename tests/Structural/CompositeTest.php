<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Composite_v2\Leaf;
use DesignPatterns\Stuctural\Composite_v2\Composite;
use DesignPatterns\Stuctural\Composite_v1\Composite\CoffeMashine;
use DesignPatterns\Stuctural\Composite_v1\Composite\Components\Сream;
use DesignPatterns\Stuctural\Composite_v1\Composite\Components\Coffee;

class CompositeTest extends TestCase
{
    public function testCompositeV1()
    {
        $mashin = new CoffeMashine;
        
        // Добавляем нужные компоненты.
        $mashin->add(new Coffee);
        $mashin->add(new Сream);

        // Получаем нужный кофе.
        $actualValue = $mashin->getCoffe();

        $this->assertSame('кофе + сливки', $actualValue);
    }

    public function testCompositeV2()
    {
        // Дерево.
        $tree = new Composite;

        // Ветвь-1.
        $branch1 = new Composite;
        $branch1->add(new Leaf);
        $branch1->add(new Leaf);
        $this->assertSame('Branch(Leaf+Leaf)', $branch1->operation());
        
        // Ветвь-2.
        $branch2 = new Composite;
        $branch2->add(new Leaf);
        $this->assertSame('Branch(Leaf)', $branch2->operation());

        // Добавляем ветви.
        $tree->add($branch1);
        $tree->add($branch2);
        
        $this->assertTrue($tree->isComposite());
    }
}