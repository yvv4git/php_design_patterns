<?php

namespace DesignPatterns\Multition;

/**
 * Общий интерфейс для логгера.
 */
interface LoggerInterface
{
    public function log(string $log):void;
}