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
    public function canSave()
    {
        return false;
    }
    
    public function handle($message)
    {
        if ($this->canSave()) {
            echo "Save message to database..\n";
        }
        return parent::handle($message);
    }
}