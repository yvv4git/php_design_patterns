<?php

namespace DesignPatterns\Stuctural\Decorator;

class SimpleCoffee implements CoffeeInterface
{
    /**
     * Стандартное поведение.
     *
     * @return float
     */
    public function getCost(): float
    {
        return 10.0;
    }

    /**
     * Стандартное поведение.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'Coffee';
    }
}