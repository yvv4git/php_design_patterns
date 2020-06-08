<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Логгер в файл.
 * Выполняем свою часть работы и передаем управление следующей комманде 
 * в цепочке.
 */
class FileLogger extends AbstractLogger
{
    /**
     * Stub метод.
     * @return bool
     */
    public function canWrite(): bool
    {
        return true;
    }
    
    public function handle($message): bool
    {
        if ($this->canWrite()) {
            echo "Save message to log file" . PHP_EOL;
        }

        // Выполняем часть работы из метода абстрактного класса.
        // Т.е. вызываем метод handle() у инстанса из nextHandler.
        return parent::handle($message);
    }
}
