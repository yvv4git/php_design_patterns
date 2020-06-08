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
     * Stub method
     * @return bool
     */
    public function canMail()
    {
        return true;
    }
    
    public function handle($message)
    {
        if ($this->canMail()) {
            echo 'Send message by email..' . PHP_EOL;
        }
        return parent::handle($message);
    }
}