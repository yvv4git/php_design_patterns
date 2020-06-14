<?php

namespace DesignPatterns\Stuctural\Flyweight;

/**
 * @class Product
 * Содержит основные состояния объектов(контекст):
 * brandName and brandLogo которые используются всеми объектами.
 */
class Product
{
    protected $title;
    protected $price;

    /**
     * @var ProductBrand
     * Это ссылка на общее состояние.
     */
    protected $brand;

    public function __construct(string $title, float $price, ProductBrand $brand)
    {
        $this->title = $title;
        $this->price = $price;
        $this->brand = $brand;
    }
}