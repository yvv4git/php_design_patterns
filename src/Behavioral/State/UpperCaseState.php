<?php

namespace DesignPatterns\Behavioral\State;

class UpperCaseState implements StateInterface
{
    /**
     * Это поведение меняет регистр символов на верхний.
     *
     * @param string $words
     * @return string
     */
    public function write(string $words): string
    {
        return mb_strtoupper($words);
    }
}