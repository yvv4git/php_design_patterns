<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Этот абстрактный класс имплементирует интерфейс цепочки комманд.
 * Так же он реализуют основной функционал, чтоб его наследники внесли
 * свои изменения.
 */
abstract class AbstractLogger implements HandlerInterface
{
    /**
     * @var Handler
     */
    private $nextHandler;
    /**
     * Sets next handler and returns its instance
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(HandlerInterface $handler)
    {
        $this->nextHandler = $handler;
        
        // it will let us link handlers in a convenient way like: $handler->setNext()->setNext()
        return $handler;
    }
    
    /**
     * Calls next handler if present
     * @param $message
     * @return bool
     */
    public function handle($message)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($message);
        }
        return false;
    }
}