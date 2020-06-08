<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Получатель.
 * Содержит бизнес логику.
 */
class Receiver
{
    public function turnOn($params)
    {
        echo "Receiver: Turning on something with params: " . implode(', ', $params) . PHP_EOL;
    }
    public function turnOff($params)
    {
        echo "Receiver: Turning off something with params: " . implode(', ', $params) . PHP_EOL;
    }
}