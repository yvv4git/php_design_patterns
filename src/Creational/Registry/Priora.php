<?php

namespace DesignPatterns\Registry;

/**
 * Конкретная реализация интерфейса ProductInterface.
 */
class Priora implements ProductInterface
{
    private const NAME = 'Priora';

    /**
     * Конкретная реализация метода.
     *
     * @return string
     */
    public function getProductName(): string
    {
        return self::NAME;
    }
}