<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\State\TextEditor;
use DesignPatterns\Behavioral\State\DefaultState;
use DesignPatterns\Behavioral\State\LowerCaseState;
use DesignPatterns\Behavioral\State\UpperCaseState;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    private static $editor;

    public static function setUpBeforeClass(): void
    {
        // задаем текстовому редактору конкретное состояние
        self::$editor = new TextEditor(new DefaultState());
    }

    public function testStateDefault()
    {
        $this->assertSame('Использум стандартное поведение приложения.', self::$editor->type('Использум стандартное поведение приложения.'));
    }

    public function testStateUpper()
    {
        // меняем состояние
        self::$editor->setState(new UpperCaseState());
        $this->assertSame('ПОВЕДЕНИЕ ПОРОГРАММЫ С ТЕКСТОМ В ВЕРХНЕМ РЕГИСТРЕ.', self::$editor->type('Поведение порограммы с текстом в верхнем регистре.'));
    }

    public function testStateLower()
    {
        // меняем состояние
        self::$editor->setState(new LowerCaseState());
        $this->assertSame('поведение с текстом в нижнем регистре.', self::$editor->type('Поведение с текстом в нижнем регистре.')) ;
    }
}