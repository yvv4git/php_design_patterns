<?php

namespace DesignPatterns\Behavioral\Command;

abstract class AbstractCommand
{
    protected $receiver;
    protected $params;
    
    /**
     * Конструктор.
     * @param Receiver $receiver Receiver для комманд.
     * @param mixed ...$params нужны получателю(Receiver)
     */
    public function __construct(Receiver $receiver, ...$params)
    {
        $this->receiver = $receiver;
        $this->params = $params;
    }
    
    /**
     * Необходимо иметь возможность запускать комманду и отменять.
     */
    public abstract function execute();
    public abstract function rollback();
}