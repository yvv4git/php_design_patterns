<?php

namespace DesignPatterns\Behavioral\State;

/**
 * Конкретный класс состояния.
 */
class LowerCaseState implements StateInterface
{
    /**
     * Состояние, которое менят регистр символов на нижний.
     *
     * @param string $words
     * @return string
     */
    public function write(string $words): string
    {
        return mb_strtolower($words);
    }
}