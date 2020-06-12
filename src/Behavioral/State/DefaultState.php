<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Конкретный класс состояния.
 * @class DefaultState
 */
class DefaultState implements StateInterface
{
    /**
     * Стандартное поведение.
     *
     * @param string $words
     * @return string
     */
    public function write(string $words): string
    {
        return $words;
    }
}