<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Основные методы.
 */
interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    public function handle($message);
}
