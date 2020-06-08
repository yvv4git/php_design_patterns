<?php

namespace DesignPatterns\Creational\Multition;

/**
 * Общий интерфейс для логгера.
 */
interface LoggerInterface
{
    public function log(string $log):void;
}