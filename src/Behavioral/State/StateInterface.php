<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Интерфейс "Состояния" задает какой метод должен быть у конкретных
 * классов состояний.
 */
interface StateInterface
{
    public function write(string $words): string;
}