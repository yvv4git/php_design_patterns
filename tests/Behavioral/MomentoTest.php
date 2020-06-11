<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\Momento\Editor;
use PHPUnit\Framework\TestCase;

class MomentoTest extends TestCase
{
    public function testMomento()
    {
        $editor = new Editor();
        $editor->type('Данные, которые я сохраняю в объекте.');
        $editor->type('Еще данные.');
        $editor->type('Больше данных.');

        // сохраняем свое состояние.
        $memento = $editor->save();

        $editor->type('Добавили другие данные.');
        $this->assertSame(' Данные, которые я сохраняю в объекте. Еще данные. Больше данных. Добавили другие данные.', $editor->getContent());

        // восстанавливаем состояние
        $editor->restore($memento);
        $this->assertSame(' Данные, которые я сохраняю в объекте. Еще данные. Больше данных.', $editor->getContent());
    }
}