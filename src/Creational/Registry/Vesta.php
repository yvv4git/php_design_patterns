<?php

namespace DesignPatterns\Creational\Registry;

class Vesta implements ProductInterface
{
    private const NAME = 'Vesta';

    /**
     * Своя реализация у класса Vesta.
     *
     * @return string
     */
    public function getProductName(): string
    {
        return self::NAME;
    }
}