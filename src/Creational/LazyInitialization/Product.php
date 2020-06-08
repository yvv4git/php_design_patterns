<?php

namespace DesignPatterns\Creational\LazyInitialization;

/**
 * Интерфейс, описывающий продукты.
 */
interface Product
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName();
}