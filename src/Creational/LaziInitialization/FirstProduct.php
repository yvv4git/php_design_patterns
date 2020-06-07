<?php

namespace DesignPatterns\LazyInitialization;

/**
 * Первый продукт.
 */
class FirstProduct implements Product
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName(): string
    {
        return 'The first product';
    }
}