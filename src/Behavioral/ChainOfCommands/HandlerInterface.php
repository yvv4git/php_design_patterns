<?php

namespace DesignPatterns\Behavioral\ChainOfCommands;

/**
 * Основные методы.
 */
interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;
    public function handle($message): bool;
}
