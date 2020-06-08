<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * =====================================
 *             FIRST FAMILY
 * =====================================
 */
class FirstFactory extends AbstractFactory
{

    /**
     * Возвращает продукт
     *
     * @return Product
     */
    public function getProduct(): ProductInterface
    {
        return new FirstProduct();
    }
}