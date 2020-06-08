<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Продукт первой фабрики
 */
class FirstProduct implements ProductInterface
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName(): string
    {
        return 'The product from the first factory' . PHP_EOL;
    }
}