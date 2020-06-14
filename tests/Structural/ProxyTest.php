<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Proxy\Weather;
use DesignPatterns\Stuctural\Proxy\WeatherProxy;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $weather = new Weather('177b4a1be7dfd10e0d30e8fdeabe0ea9');
        $proxy = new WeatherProxy($weather);
        echo $proxy->getWeather('Moscow');
        echo $proxy->getWeather('Tver');

        $this->assertTrue(true);
    }
}