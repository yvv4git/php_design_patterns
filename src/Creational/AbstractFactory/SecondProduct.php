<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Продукт второй фабрики
 */
class SecondProduct implements ProductInterface
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName(): string
    {
        return 'The product from second factory';
    }
}