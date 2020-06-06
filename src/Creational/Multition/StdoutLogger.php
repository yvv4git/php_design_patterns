<?php

namespace DesignPatterns\Multition;

class StdoutLogger implements LoggerInterface
{
    /**
     * Выводим лог в stdout.
     *
     * @param string $log
     * @return void
     */
    public function log(string $log): void
    {
        echo $log;
    }
}