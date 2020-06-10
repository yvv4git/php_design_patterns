<?php

namespace Tests\Behavioral;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Iterator\MyCollection;

class IteratorTest extends TestCase
{
    public function testIterator()
    {
        $actualResult = [];
        $expected = ['3-ий элемент', '2-ой элемент', '1-ый элемент'];

        // добавляем элементы в коллекцию
        $collection = (new MyCollection())->addItem('1-ый элемент')
            ->addItem('2-ой элемент')
            ->addItem('3-ий элемент');
        

        // Пройдемся по коллекции используя наш итератор.
        foreach ($collection->getIterator() as $item) {
            $actualResult[] = $item;
        }

        $this->assertSame($expected, $actualResult);
    }
}