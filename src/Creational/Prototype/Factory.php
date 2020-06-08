<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Это фабрика, которая должна возвращать клоны
 * некоторого объекта-продукта.
 */
class Factory
{
    /**
     * Некоторый продукт, который мы желаем
     * клонировать множество раз.
     *
     * @var CarInterface
     */
    private $car;

    /**
     * Конструктор.
     *
     * @param CarInterface $car
     */
    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    /**
     * Возвращаем клон продукта.
     *
     * @return CarInterface
     */
    public function getCar(): CarInterface
    {
        return clone $this->car;
    }
}