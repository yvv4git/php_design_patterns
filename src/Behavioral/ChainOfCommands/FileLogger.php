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
     * Stub method
     * @return bool
     */
    public function canWrite()
    {
        return true;
    }
    
    public function handle($message)
    {
        if ($this->canWrite()) {
            echo "Save message to log file..\n";
        }
        return parent::handle($message);
    }
}
