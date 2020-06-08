<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Интерфейс продуктов.
 */
interface ProductInterface
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName();
}