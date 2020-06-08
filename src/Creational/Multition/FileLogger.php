<?php

namespace DesignPatterns\Creational\Multition;

class FileLogger implements LoggerInterface
{
    private const FILE = '/tmp/test.log';

    /**
     * Конкретная реализация метода.
     * Сохраняем строку в файл.
     *
     * @param string $log
     * @return void
     */
    public function log(string $log): void
    {
        file_put_contents(self::FILE, $log, FILE_APPEND);
    }
}