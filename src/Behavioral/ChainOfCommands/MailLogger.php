<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Логгер через почту.
 * Выполняем свою часть работы и передаем управление следующей комманде 
 * в цепочке.
 */
class MailLogger extends AbstractLogger
{
    /**
     * Stub метод.
     * @return bool
     */
    public function canMail(): bool
    {
        return true;
    }
    
    public function handle($message): bool
    {
        if ($this->canMail()) {
            echo 'Send message by email..' . PHP_EOL;
        }

        // Выполняем часть работы из метода абстрактного класса.
        // Т.е. вызываем метод handle() у инстанса из nextHandler.
        return parent::handle($message);
    }
}