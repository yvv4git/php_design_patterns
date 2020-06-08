<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Конкретная комманда.
 * Она ничего не делает, а передает вызов к receiver'у.
 */
class TurnOnCommand extends AbstractCommand
{
    public function execute()
    {
        $this->receiver->turnOn($this->params);
    }
    public function rollback()
    {
        $this->receiver->turnoff($this->params);
    }
}