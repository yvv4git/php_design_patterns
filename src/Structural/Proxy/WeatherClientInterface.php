<?php

namespace DesignPatterns\Stuctural\Proxy;

/**
 * Общий интерфейс.
 * Используется как основным классом, так и  proxy.
 */
interface WeatherClientInterface
{
    public function getWeather(string $location): string;
}