<?php

namespace DesignPatterns\ObjectPool;

use DesignPatterns\ObjectPool\ProductInterface;

/**
 * Некоторая реализация паттерна object poll.
 */
class Factory
{
    /**
     * Массив продуктов.
     *
     * @var []ProductInterface
     */
    private static $products = [];

    /**
     * Кладем продукт в object poll.
     *
     * @param ProductInterface $product
     * @return void
     */
    public static function pushPruduct(ProductInterface $product): void
    {
        self::$products[$product->getId()] = $product;
    }

    /**
     * Достаем продукт из object poll по id.
     *
     * @param integer $id
     * @return ProductInterface
     */
    public static function popProduct(int $id): ?ProductInterface
    {
        return self::$products[$id] ? self::$products[$id] : null;
    }

    public static function deleteProduct(int $id): void
    {
        if (isset(self::$products[$id])) {
            unset(self::$products[$id]);
        }
    }
}