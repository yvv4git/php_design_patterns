<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Логгер в бд.
 * Выполняем свою часть работы и передаем управление следующей комманде 
 * в цепочке.
 */
class DbLogger extends AbstractLogger
{
    /**
     * Stub метод.
     * @return bool
     */
    public function canSave(): bool
    {
        return false;
    }
    
    public function handle($message): bool
    {
        // Выполняем свою работу.
        if ($this->canSave()) {
            echo "Save message to database" . PHP_EOL;
        }

        // Выполняем часть работы из метода абстрактного класса.
        // Т.е. вызываем метод handle() у инстанса из nextHandler.
        return parent::handle($message);
    }
}