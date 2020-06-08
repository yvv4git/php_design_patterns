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
     * Установить следующий обработчик и вернуть инстанс.
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
        
        // Это позволяет делать так: $handler->setNext()->setNext()
        return $handler;
    }
    
    /**
     * Вызываем следующий обработчик.
     * @param $message
     * @return bool
     */
    public function handle($message): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($message);
        }
        return false;
    }
}