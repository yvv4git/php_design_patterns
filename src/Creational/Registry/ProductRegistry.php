<?php

namespace DesignPatterns\Registry;

use DesignPatterns\Builder\Product;

/**
 * Реализация паттерна Реестр / Registry.
 */
class ProductRegistry
{
    /**
     * Массив объектов.
     *
     * @var []ProductInterface
     */
    private static $data = [];

    /**
     * Кладем объект в реестр.
     *
     * @param integer $key
     * @param ProductInterface $value
     * @return void
     */
    public function set(int $key, ProductInterface $value): void
    {
        self::$data[$key] = $value;
    }

    /**
     * Возвращаем объект из реестра.
     * Надо отметить, что объект не удаляется из реестра,
     * а остается там же.
     *
     * @param integer $key
     * @return ProductInterface|null
     */
    public function get(int $key): ?ProductInterface
    {
        return self::$data[$key] ? self::$data[$key] : null;
    }

    /**
     * Удаляем объект из реестра.
     *
     * @param [type] $key
     * @return void
     */
    public function delete($key): void
    {
        if (isset(self::$data[$key])) {
            unset(self::$data[$key]);
        }
    }
}