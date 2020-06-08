<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * =====================================
 *             SECOND FAMILY
 * =====================================
 */
class SecondFactory extends AbstractFactory
{

    /**
     * Возвращает продукт
     *
     * @return Product
     */
    public function getProduct(): ProductInterface
    {
        return new SecondProduct();
    }
}