<?php

namespace Tests\Behavioral;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\TemplateMethod\IOSBuilder;
use DesignPatterns\Behavioral\TemplateMethod\AndroidBuilder;

/**
 * Шаблонный метод позволяет:
 * 1. Расширить базовый алгоритм, не меняя сиходный класс.
 * 2. Избежать дублирования кода в классах с похожим поведением.
 * 
 * Чем-то напоминаем пораждающий паттерн Абстрактный метод.
 * 
 * @class TemplateMethodTest
 */
class TemplateMethodTest extends TestCase
{
    private const BASE_ALGORYTHM = [
        'Создаем приложение.',
        'Инициализируем.',
        'Запускаем тесты.',
    ];

    public function testTemplateMethodAndrod()
    {
        $expectedResult = array_merge(
            self::BASE_ALGORYTHM, 
            ['Деплоим Android приложение!']
        );

        $androidBuilder = new AndroidBuilder;
        $androidBuilder->build();
        $this->assertSame($expectedResult, $androidBuilder->getProduct());        
    }

    public function testTemplateMethodiOS()
    {
        $expectedResult = array_merge(
            self::BASE_ALGORYTHM, 
            ['Деплоим iOS приложение!']
        );

        $iosBuilder = new IOSBuilder;
        $iosBuilder->build();
        $this->assertSame($expectedResult, $iosBuilder->getProduct());
    }
}