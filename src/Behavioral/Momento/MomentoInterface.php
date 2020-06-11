<?php

namespace DesignPatterns\Behavioral\Momento;

/**
 * Интерфейс memento.
 */
interface MementoInterface
{
    public function getContent(): string;
}