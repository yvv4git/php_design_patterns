<?php

namespace Tests\Creational;

use DesignPatterns\Creational\FactoryMethod\JSONResponse;
use DesignPatterns\Creational\FactoryMethod\HTMLResponse;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * Тестовые кейсы.
     *
     * @return array
     */
    public function responseTypesDataProvider(): array
    {
        return [
            ['json', '{"code": 200, "response": "some input data"}'],
            ['html', '<html>some input data</html>'],
        ];
    }

    /**
     * Тестируем с использованием провайдера данных.
     * 
     * @dataProvider responseTypesDataProvider
     * @param string $type
     * @param string $expected
     * @return void
     */
    public function testAbstractFactory(string $type, string $expected )
    {
        $data = 'some input data';
        $responseFormat = $type; // задаем конфигурацию
        $response = '';
        switch ($responseFormat) {
            case 'json':
                $response = new JSONResponse($data); // используется JSONFormatter
                break;
            case 'html':
                $response = new HTMLResponse($data); // используется HTMLFormatter
                break;
        }

        $this->assertSame((string)$response, $expected);
    }
}