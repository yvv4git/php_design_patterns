<?php

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * @var []Command очередь комманд.
     */
    protected $commands = [];
    
    /**
     * Добавляем комманду.
     *
     * @param AbstractCommand $command
     * @return integer
     */
    public function pushCommand(AbstractCommand $command): int
    {
        return array_push($this->commands, $command);
    }
    
    /**
     * Выполняем комманду.
     *
     * @return boolean
     */
    public function executeCommand(): ?bool
    {
        /** @var AbstractCommand $lastCommand */
        if ($lastCommand = array_pop($this->commands)) {
            return $lastCommand->execute();
        }
        return false;
    }
    
    /**
     * Откатываем комманду.
     *
     * @return boolean
     */
    public function rollbackCommand(): ?bool
    {
        /** @var AbstractCommand $lastCommand */
        if ($lastCommand = array_pop($this->commands)) {
            return $lastCommand->rollback();
        }
        return false;
    }
}