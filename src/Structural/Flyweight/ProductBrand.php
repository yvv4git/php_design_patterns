<?php

namespace DesignPatterns\Stuctural\Flyweight;

/**
 * Это класс Flyweight, который содержит часть состояниея, уникальное.
 * $brandName и $brandLogo - уникальные состояния.
 */
class ProductBrand
{
    private $brandName;
    private $brandLogo;

    /**
     * Конструктор.
     *
     * @param string $brandName
     * @param string $brandLogo
     */
    public function __construct(string $brandName, string $brandLogo)
    {
        $this->brandName = $brandName;
        $this->brandLogo = $brandLogo;
    }
}