<?php

namespace DesignPatterns\Stuctural\Decorator;

interface CoffeeInterface
{
    public function getCost(): float;
    public function getDescription(): string;
}