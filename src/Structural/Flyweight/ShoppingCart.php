<?php

namespace DesignPatterns\Stuctural\Flyweight;

/**
 * @class ShoppingCart
 */
class ShoppingCart
{
    /** @var Product[] */
    protected $products = [];

    /**
     * Добавляем продукт.
     *
     * @param string $title
     * @param float $price
     * @param string $brandName
     * @param string $brandLogo
     * @return void
     */
    public function addProduct(string $title, float $price, string $brandName, string $brandLogo)
    {
        $this->products[] = ProductFactory::getProduct($title, $price, $brandName, $brandLogo);
    }

    /**
     * Возвращаем продукты.
     *
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}