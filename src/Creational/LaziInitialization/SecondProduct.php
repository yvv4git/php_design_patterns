<?php

namespace DesignPatterns\LazyInitialization;

/**
 * Второй продукт.
 */
class SecondProduct implements Product
{

    /**
     * Возвращает название продукта
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Second product';
    }
}