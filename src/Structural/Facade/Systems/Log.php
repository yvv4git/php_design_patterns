<?php

namespace DesignPatterns\Stuctural\Facade\Systems;

/**
 * Система-3.
 * @class Log
 */
class Log
{
    /**
     * Типа логируем.
     *
     * @param string $str
     * @return void
     */
    public function logTransaction(string $str)
    {
        echo $str . PHP_EOL;
    }
}