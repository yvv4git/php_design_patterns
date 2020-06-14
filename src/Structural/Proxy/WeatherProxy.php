<?php

namespace DesignPatterns\Stuctural\Proxy;

/**
 * Класс - Proxy.
 * Хранит ссылку на основной объект-сервис.
 * Добавляет возможность кэширования.
 */
class WeatherProxy implements WeatherClientInterface
{
    /** @var WeatherClient */
    protected $client;
    private $cache = [];

    /**
     * Конструктор.
     *
     * @param WeatherClient $client
     */
    public function __construct(WeatherClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Получение погоды.
     *
     * @param string $location
     * @return string
     */
    public function getWeather(string $location): string
    {
        // проверяем кэшь
        if (!isset($this->cache[$location])) {
            $this->cache[$location] = $this->client->getWeather($location);
        } 

        return $this->cache[$location];
    }
}