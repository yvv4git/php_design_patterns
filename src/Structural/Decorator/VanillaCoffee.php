<?php

namespace DesignPatterns\Stuctural\Decorator;

class VanillaCoffee implements CoffeeInterface
{
    protected $coffee;

    /**
     * Конструктор.
     *
     * @param CoffeeInterface $coffee
     */
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }
        
    /**
     * Изменяем(декорируем) стандартное значение.
     *
     * @return float
     */
    public function getCost(): float
    {   
        return $this->coffee->getCost() + 3;
    }   
        
    public function getDescription(): string
    {   
        return $this->coffee->getDescription() . ', with vanilla';
    }   
}
  