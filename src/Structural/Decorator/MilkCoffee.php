<?php

namespace DesignPatterns\Stuctural\Decorator;

class MilkCoffee implements CoffeeInterface
{
    protected $coffee;

    /**
     * Конструктор.
     * Внедряем зависимость(DI).
     *
     * @param CoffeeInterface $coffee
     */
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * Декарируем(изменяем)
     * стандартное значение.
     *
     * @return float
     */
    public function getCost(): float
    {
        return $this->coffee->getCost() + 2;
    }

    /**
     * Декорируем.
     * 
     * @return string
     */
    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', with milk';
    }
}