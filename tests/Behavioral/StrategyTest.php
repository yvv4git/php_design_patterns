<?php

namespace Tests\Behavioral;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Strategy\SorterContext;
use DesignPatterns\Behavioral\Strategy\QuickSortStrategy;
use DesignPatterns\Behavioral\Strategy\BubbleSortStrategy;

class StrategyTest extends TestCase
{
    /**
     * Тест с использованием дата провайдера.
     *
     * @dataProvider sortDataCases
     * @return void
     */
    public function testStrategy($data, $expectedValue)
    {
        $actualValue = [];

        if (count($data) < 10) {
            $sorter = new SorterContext(new BubbleSortStrategy());
            $actualValue = $sorter->sortArray($data);
        } else {
            $sorter = new SorterContext(new QuickSortStrategy());
            $actualValue = $sorter->sortArray($data);
        }

        $this->assertSame($expectedValue, $actualValue);
    }

    /**
     * Провайдер данных для сортировок.
     * Первое значение - исходный массив, подлежащий сортировке.
     * Второе значение - каким должен стать массив после сортировки.
     *
     * @return array
     */
    public function sortDataCases(): array
    {
        return [
            [
                [4, 2, 1, 5, 9],
                [1, 2, 4, 5, 9],
            ],
            [
                [4, 2, 1, 5, 9, 7, 20, 32, 13, 8],
                [1, 2, 4, 5, 7, 8, 9, 13, 20, 32],
            ],
        ];
    }
}