<?php

namespace DesignPatterns\Stuctural\Proxy;

/**
 * Основной класс. Содержит полезную бизнес логику.
 */
class Weather implements WeatherClientInterface
{
    protected $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Стандартный метод из интерфейса.
     * @return string
     */
    public function getWeather(string $location): string
    {
        $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' 
        . $location . '&APPID=' . $this->token);
        $data = json_decode($json, true);
        return 'weather: ' . $data['weather'][0]['description'] ?? 'no data' . PHP_EOL;
    }
}