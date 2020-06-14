<?php

namespace DesignPatterns\Stuctural\Flyweight;

/**
 * Фабрика решает, когда создать новый объект,а когда можно использовать
 * имеющийся.
 */
class ProductFactory
{
    public static $brandTypes = [];
    
    /**
     * Возвращает инстанс продукта.
     *
     * @param string $title
     * @param float $price
     * @param string $brandName
     * @param string $brandLogo
     * @return Product
     */
    public static function getProduct($title, $price, $brandName, $brandLogo): Product
    {
        // инициализация общего состояния !!!
        $brand = static::getBrand($brandName, $brandLogo);
        return new Product($title, $price, $brand);
    }
    
    /**
     * Проверяет, имеется ли уже инстанс объекта $brandTypes.
     *
     * @param string $brandName
     * @param string $brandLogo
     * @return ProductBrand
     */
    protected static function getBrand(string $brandName, string $brandLogo): ProductBrand
    {
        if (isset(static::$brandTypes[$brandName])) {
            return static::$brandTypes[$brandName];
        }
        return static::$brandTypes[$brandName] = new ProductBrand($brandName, $brandLogo);
    }
}